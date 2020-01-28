<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->text(15),
        'summary' => $faker->paragraph(5),
        'description' => $faker->paragraph(5),
        'directions' => $faker->paragraph(5),
        'notes' => $faker->paragraph(1),
        'cook_time_hour' => $faker->randomDigit(),
        'cook_time_minute' => $faker->numberBetween(0,60),
        'prep_time_hour' => $faker->randomDigit(),
        'prep_time_minute' => $faker->numberBetween(0,60),
        'servings' => $faker->numberBetween(0,8),
        'calories' => $faker->randomDigit(),
        'fat' => $faker->randomFloat(2,0,9),
        'cholesterol' => $faker->randomFloat(2,0,15),
        'sodium' => $faker->randomFloat(2,0,15),
        'carbohydrate' => $faker->randomFloat(2,0,9),
        'fiber' => $faker->randomFloat(2,0,5),
        'sugar' => $faker->randomFloat(2,0,9),
        'protein' => $faker->randomFloat(2,0,80),
    ];
});
