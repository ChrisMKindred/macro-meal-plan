@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <h1>Find</h1>
            <form name="fatsecret" id="fatsecret" action="{!! action('FatSecretController@getFood') !!}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <select class="form-control" id="type" name="type">
                            <option value="search">Search</option>
                            <option value="barcode">Barcode</option>
                            <option value="food_id">Food ID</option>
                       </select>
                    </div>
                    <div class="col">
                        <input type="text"
                            class="form-control @error('value') is-invalid @enderror"
                            id="value"
                            name="value"
                            aria-describedby="valueHelp"
                            value="{{ old('value', '') }}">
                            @error('value')
                                <small id="valueHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                    </div>
                    <div class="col">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Item</h1>
            <form action="{!! action('RecipeController@index') !!}" method="post">
                @csrf
                @include('recipes/partials/_form')
            </form>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group" id="list">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
const foods = [];
function runSearch(e){
    e.preventDefault();
    foods.length = 0;
    fetch(e.target.action, {
        method: 'post',
        body: new FormData( e.target )
    })
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data);
        if(data.foods) {
            foods.push(...data.foods.food);
            console.log(foods);
            const html = foods.map(food => {
                var title = ( food.brand_name ) ? food.brand_name + ' : ' + food.food_name : food.food_name;
                return `
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <h5>${title}</h5>
                    <small>${food.food_description}</small>
                </a>
                `;
            }).join('');
            $('#list').html( html );
            $('.modal-title').html( 'Results For ' + $('#value').val()  );
           $('.modal').modal('toggle');
        } else {
            if ( data.food.food_name ){
                $("#title").val( ( data.food.brand_name ) ? data.food.brand_name + ' : ' + data.food.food_name : data.food.food_name );
                $('#calories').val( data.food.servings.serving.calories );
                $('#fat').val( data.food.servings.serving.fat );
                $('#carbohydrate').val( data.food.servings.serving.carbohydrate );
                $('#sugar').val( data.food.servings.serving.sugar );
                $('#protein').val( data.food.servings.serving.protein );
            }
        }
    });
}

const searchForm = document.querySelector('#fatsecret');
const modal = document.querySelector('.modal');

searchForm.addEventListener('submit', runSearch);


</script>
@endsection
