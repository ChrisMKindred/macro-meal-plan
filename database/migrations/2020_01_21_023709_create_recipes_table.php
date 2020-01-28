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
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->text('directions')->nullable();
            $table->text('notes')->nullable();
            $table->string('cook_time_hour')->nullable();
            $table->string('cook_time_minute')->nullable();
            $table->string('prep_time_hour')->nullable();
            $table->string('prep_time_minute')->nullable();
            $table->string('servings')->nullable();
            $table->string('calories')->nullable();
            $table->string('fat')->nullable();
            $table->string('cholesterol')->nullable();
            $table->string('sodium')->nullable();
            $table->string('carbohydrate')->nullable();
            $table->string('fiber')->nullable();
            $table->string('sugar')->nullable();
            $table->string('protein')->nullable();
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
