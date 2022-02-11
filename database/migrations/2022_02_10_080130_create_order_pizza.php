<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPizza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_pizza', function (Blueprint $table) {
            $table->UnsignedBigInteger('order_id');
            $table->UnsignedBigInteger('pizza_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('pizza_id')->references('id')->on('pizza');
            $table->primary(['order_id', 'pizza_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_pizza');
    }
}
