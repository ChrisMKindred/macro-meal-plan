<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Requests\StoreRecipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipe $request)
    {
        $recipe = new Recipe();

        $recipe->title = request('title');
        $recipe->calories = request('calories');
        $recipe->fat = request('fat');
        $recipe->carbohydrate = request('carbohydrate');
        $recipe->protein = request('protein');
        $recipe->save();

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update( StoreRecipe $request, Recipe $recipe)
    {

        $recipe->title = request('title');
        $recipe->calories = request('calories');
        $recipe->fat = request('fat');
        $recipe->carbohydrate = request('carbohydrate');
        $recipe->protein = request('protein');
        $recipe->sugar = request('sugar');
        $recipe->save();

        return redirect('/recipes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect('/recipes');

    }
}
