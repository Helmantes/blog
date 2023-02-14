<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // name of the customer
            $table->string('email');// email of the customer
            $table->string('phone');// phone number of the customer
            $table->string('type'); // type of the customer company or individual
            $table->string('address'); // address of the customer
            $table->string('city'); // city of the customer
            $table->string('state'); // state of the customer
            $table->string('postal_code'); // postal code of the customer
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
        Schema::dropIfExists('customers');
    }
}
