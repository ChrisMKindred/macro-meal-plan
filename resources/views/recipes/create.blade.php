@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <h1>Find</h1>
            <form name="fatsecret" action="{!! action('FatSecretController@getFood') !!}" method="post">
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
@endsection
