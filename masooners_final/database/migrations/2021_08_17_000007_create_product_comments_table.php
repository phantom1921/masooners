<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('product_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_type');
            $table->string('user');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
