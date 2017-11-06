<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->unsigned();
            // $table->integer('category_id')->unsigned();
            $table->string('product_name');
            $table->string('product_model');
            $table->string('product_code');
            $table->string('product_description');
            $table->float('product_price');
            $table->integer('product_availability');
            $table->timestamps();
        });
        Schema::table('products', function ($table) {
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
