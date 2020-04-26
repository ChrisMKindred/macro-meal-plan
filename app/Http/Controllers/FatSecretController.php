<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Exception;

class FatSecretController extends Controller
{
    protected $client_id;
    protected $client_secret;

    public function __construct()
    {
        $this->client_id = env('FATSECRET_CLIENT_ID');
        $this->client_secret = env('FATSECRET_CLIENT_SECRET');
    }

    public function getFood(Request $request)
    {
        switch (request('type')) {
            case 'food_id':
                $return = $this->getFoodByID(request('value'));
                break;

            case 'barcode':
                $return = $this->getFoodByBarcode(request('value'));
                break;

            default:
                $return = $this->getFoodSearch(request('value'));
                break;
        }
        return $return;
    }

    public function getFoodByID($food_id = '11613684')
    {

        $post = "method=food.get&format=json&food_id=$food_id";
        return $this->makeCall($post);
    }

    public function getFoodByBarcode($barcode = '857777004232')
    {
        $post = "method=food.find_id_for_barcode&format=json&barcode=$barcode";
        $return = json_decode($this->makeCall($post));
        if ('0' === $return->food_id->value) {
            return "No item found for barcode: $barcode";
        }
        return $this->getFoodByID($return->food_id->value);
    }

    public function getFoodSearch($querysting = 'rxbar chocolate')
    {
        $post = "method=foods.search&format=json&max_results=25&search_expression=$querysting";
        return $this->makeCall($post);
    }

    private function getAccessToken()
    {
        $access_token = Cache::get('fatsecret_access_token');
        if (!$access_token) {
            $content = "grant_type=client_credentials";
            $authorization = base64_encode("$this->client_id:$this->client_secret");
            $header = array(
                "Authorization: basic {$authorization}",
                "Content-Type: application/x-www-form-urlencoded"
            );

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://oauth.fatsecret.com/connect/token",
                CURLOPT_HTTPHEADER => $header,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $content
            ));

            $response = json_decode(curl_exec($curl));
            curl_close($curl);
            try {
                $expires = $response->expires_in;
                $access_token = $response->access_token;
                Cache::put('fatsecret_access_token', $access_token, \Carbon\Carbon::now()->addSeconds($expires));
            } catch (Exception $e) {
                report($e);
            }
        }

        return $access_token;
    }


    private function makeCall($post)
    {

        $access_token = $this->getAccessToken();

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://platform.fatsecret.com/rest/server.api",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Authorization: Bearer $access_token"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        if (isset(json_encode($response)->error)) {
            Cache::forget('fatsecret_access_token');
        }
        return $response;
    }
}
