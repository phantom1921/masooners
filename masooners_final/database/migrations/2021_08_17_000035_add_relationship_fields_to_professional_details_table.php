<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProfessionalDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('professional_details', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id', 'category_fk_4607800')->references('id')->on('categories');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_fk_4607815')->references('id')->on('users');
        });
    }
}
