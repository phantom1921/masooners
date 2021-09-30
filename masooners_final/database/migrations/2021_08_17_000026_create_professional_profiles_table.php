<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalProfilesTable extends Migration
{
    public function up()
    {
        Schema::create('professional_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('pro_about')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
