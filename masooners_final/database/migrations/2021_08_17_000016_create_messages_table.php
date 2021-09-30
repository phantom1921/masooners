<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('message')->nullable();
            $table->string('userid')->nullable();
            $table->string('customerid')->nullable();
            $table->string('flow')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
