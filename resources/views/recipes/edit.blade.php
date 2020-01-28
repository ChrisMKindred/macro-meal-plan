@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Recipe</h1>
            <form action="/recipes" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                <input type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        aria-describedby="titleHelp"
                        value="{{ $recipe['title'] ?? '' }}">
                    <small id="tileHelp" class="form-text text-muted">Title</small></small>
                </div>
                <div class="form-group">
                    <label for="calories">Calories</label>
                    <input type="text" class="form-control" id="calories" name="calories" aria-describedby="caloriesHelp" placeholder="Enter Calories">
                    <small id="caloriesHelp" class="form-text text-muted">Calories</small></small>
                </div>
                <div class="form-group">
                    <label for="fat">fat</label>
                    <input type="text" class="form-control" id="fat" name="fat" aria-describedby="fatHelp" placeholder="Enter fat">
                    <small id="fatHelp" class="form-text text-muted">fat</small></small>
                </div>
                <div class="form-group">
                    <label for="carbohydrate">carbohydrate</label>
                    <input type="text" class="form-control" id="carbohydrate" name="carbohydrate" aria-describedby="carbsHelp" placeholder="Enter Carbs">
                    <small id="carbsHelp" class="form-text text-muted">carbohydrate</small></small>
                </div>
                <div class="form-group">
                    <label for="sugar">Sugar</label>
                    <input type="text" class="form-control" id="sugar" name="sugar" aria-describedby="sugarHelp" placeholder="Enter Sugar">
                    <small id="sugarHelp" class="form-text text-muted">Sugar</small></small>
                </div>
                <div class="form-group">
                    <label for="protein">Protein</label>
                    <input type="text" class="form-control" id="protein" name="protein" aria-describedby="proteinHelp" placeholder="Enter protein">
                    <small id="proteinHelp" class="form-text text-muted">Protein</small></small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
