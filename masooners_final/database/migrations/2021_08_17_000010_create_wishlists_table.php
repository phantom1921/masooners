<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistsTable extends Migration
{
    public function up()
    {
        Schema::create('wishlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product')->nullable();
            $table->string('customerid')->nullable();
            $table->string('customer_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
