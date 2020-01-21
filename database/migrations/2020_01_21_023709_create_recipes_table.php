<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('summary');
            $table->text('description');
            $table->text('directions');
            $table->text('notes');
            $table->string('cook_time_hour');
            $table->string('cook_time_minute');
            $table->string('prep_time_hour');
            $table->string('prep_time_minute');
            $table->string('servings');
            $table->string('calories');
            $table->string('fat');
            $table->string('cholesterol');
            $table->string('sodium');
            $table->string('carbohydrate');
            $table->string('fiber');
            $table->string('sugar');
            $table->string('protein');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
