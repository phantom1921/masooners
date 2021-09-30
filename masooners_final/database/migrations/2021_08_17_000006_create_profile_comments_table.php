<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('profile_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user');
            $table->longText('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
