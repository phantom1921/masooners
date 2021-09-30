<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProSubCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('pro_sub_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('prof_category_id');
            $table->foreign('prof_category_id', 'prof_category_fk_4609599')->references('id')->on('categories');
        });
    }
}
