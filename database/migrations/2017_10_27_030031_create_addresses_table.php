<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_street');
            $table->string('address_neighbourhood');
            $table->string('address_city');
            $table->string('address_state');
            $table->string('address_postal_code');
            $table->integer('addressable_id');
            $table->string('addressable_type');
            $table->string('address_lat')->nullable();
            $table->string('address_long')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
