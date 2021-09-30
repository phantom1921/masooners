<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('total')->nullable();
            $table->string('customer')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
