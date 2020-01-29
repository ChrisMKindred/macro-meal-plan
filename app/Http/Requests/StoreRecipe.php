<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipe extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'calories' => 'nullable|numeric|min:0',
            'fat' => 'nullable|numeric|min:0',
            'carbohydrate' => 'nullable|numeric|min:0',
            'sugar' => 'nullable|numeric|min:0',
            'protein' => 'nullable|numeric|min:0'
        ];
    }
}
