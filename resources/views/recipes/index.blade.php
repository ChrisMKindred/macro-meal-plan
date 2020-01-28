@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Item</th>
                        <th scope="col">Calories</th>
                        <th scope="col">Fat</th>
                        <th scope="col">Carbs</th>
                        <th scope="col">Protein</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                    <tr>
                        <th scope="row">{{$recipe->id}}</th>
                        <td><a href="{{ url("/recipes/" . $recipe->id) }}">{{$recipe->title}}</a></td>
                        <td class="text-right">{{$recipe->calories}}</td>
                        <td class="text-right">{{$recipe->fat}}</td>
                        <td class="text-right">{{$recipe->carbohydrate}}</td>
                        <td class="text-right">{{$recipe->protein}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th></th>
                    <th></th>
                    <th class="text-right">{{ $recipes->sum('calories') }}</th>
                    <th class="text-right">{{ $recipes->sum('fat') }}</th>
                    <th class="text-right">{{ $recipes->sum('carbohydrate') }}</th>
                    <th class="text-right">{{ $recipes->sum('protein') }}</th>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
