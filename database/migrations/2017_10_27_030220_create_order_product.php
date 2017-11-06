<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('order_product', function (Blueprint $table) {
         $table->integer('order_id')->unsigned();
         $table->integer('product_id')->unsigned();
         $table->timestamps();

     }); //

     Schema::table('order_product', function ($table) {
         $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
         $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
