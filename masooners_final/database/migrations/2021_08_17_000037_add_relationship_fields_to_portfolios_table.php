<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPortfoliosTable extends Migration
{
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_fk_4607869')->references('id')->on('users');
        });
    }
}
