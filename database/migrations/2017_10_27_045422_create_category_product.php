<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('category_product', function (Blueprint $table) {
         $table->integer('category_id')->unsigned();
         $table->integer('product_id')->unsigned();
         $table->timestamps();
     });
     Schema::table('category_product', function ($table) {
         $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
         $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
     }); //
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
