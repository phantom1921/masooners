<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerContactsTable extends Migration
{
    public function up()
    {
        Schema::create('customer_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('number');
            $table->string('zip');
            $table->longText('address');
            $table->longText('address_2')->nullable();
            $table->string('customerid')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
