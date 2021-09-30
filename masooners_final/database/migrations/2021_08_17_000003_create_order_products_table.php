<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_no')->nullable();
            $table->string('product')->nullable();
            $table->string('quantity')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
