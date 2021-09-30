<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('professional_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('phone');
            $table->string('country');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
