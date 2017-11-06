<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_name')->unique();
            $table->string('supplier_contact_name');
            $table->string('supplier_phone');
            $table->string('supplier_email');
            $table->string('supplier_logo_path');
            $table->string('supplier_description');
            $table->timestamps();
        });
        // Schema::table('suppliers', function ($table) {
        //     $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');;
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supliers');
    }
}
