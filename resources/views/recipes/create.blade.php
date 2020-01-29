@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Recipe</h1>
            <form action="{!! action('RecipeController@index') !!}" method="post">
                @csrf
                @include('recipes/partials/_form')
            </form>
        </div>
    </div>
</div>
@endsection
