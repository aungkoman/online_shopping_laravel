<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('goods_id');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('cost');
            $table->integer('goods_order_id');
            $table->timestamps();
        });
        /*
        - goods_id
        - colors
        - size
        - quantity
        - price
        - cost
        - order_id
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
