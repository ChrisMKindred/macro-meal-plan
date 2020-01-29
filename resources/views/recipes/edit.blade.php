@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Recipe</h1>
            <form action="{!! action('RecipeController@update', $recipe) !!}" method="post">
                @csrf
                @method('patch')
                @include('recipes/partials/_form')
            </form>
            <form method="post" class="delete_form" action="/recipes/{{ $recipe->id }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
