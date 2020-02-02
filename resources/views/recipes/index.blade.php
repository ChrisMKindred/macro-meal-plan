@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col" class="text-right">Calories</th>
                        <th scope="col" class="text-right">Fat</th>
                        <th scope="col" class="text-right">Carbs</th>
                        <th scope="col" class="text-right">Protein</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipes as $recipe)
                    <tr>
                        <th scope="row"><a href="{{ url("/recipes/" . $recipe->id) }}">{{$recipe->title}}</a></th>
                        <td class="text-right">{{$recipe->calories}}</td>
                        <td class="text-right">{{$recipe->fat}}</td>
                        <td class="text-right">{{$recipe->carbohydrate}}</td>
                        <td class="text-right">{{$recipe->protein}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th>{{ $recipes->count('title') }}</th>
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
