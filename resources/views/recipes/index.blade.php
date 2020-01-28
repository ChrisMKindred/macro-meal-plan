@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{dd($recipes)}}
            <table class="table">
                <thead>
                    <th class="">#</th>
                    <th class="col h5">Title</th>
                    <th class="col h5">Calories</th>
                    <th class="col h5">Fat</th>
                    <th class="col h5">Carbs</th>
                    <th class="col h5">Protein</th>
                </thead>
                @foreach ($recipes as $recipe)
                <tbody>
                    <tr>
                        <th>{{$recipe->id}}</th>
                        <td><a href="">{{$recipe->title}}</a></td>
                        <td class="text-right">{{$recipe->calories}}</td>
                        <td class="text-right">{{$recipe->fat}}</td>
                        <td class="text-right">{{$recipe->carbohydrate}}</td>
                        <td class="text-right">{{$recipe->protein}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
