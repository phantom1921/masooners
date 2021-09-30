<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProfessionalProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('professional_profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_fk_4607843')->references('id')->on('users');
        });
    }
}
