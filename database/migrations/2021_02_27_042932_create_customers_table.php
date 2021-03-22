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
            $table->string("names");
            $table->string("lastnames");
            $table->string("area")->default('CDMX');
            $table->string("address1");
            $table->string("address2")->nullable();
            $table->string("address3")->nullable();
            $table->string("address4")->nullable();
            $table->string("city");
            $table->string("country");
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("zipcode")->nullable();
            $table->integer("origin");
            $table->string("notes")->nullable();
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
