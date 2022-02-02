<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_ingredient', function (Blueprint $table) {
            $table->id();
            $table->integer('pizzaId');
            $table->integer('ingredient')->references('id')->on('ingredienten');
            $table->integer('prijs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        return $this->hasMany(\App\Models\Pizza::class);
        return $this->hasMany(\App\Models\Ingredient::class);
        Schema::dropIfExists('pizza_ingredient');

    }
}
