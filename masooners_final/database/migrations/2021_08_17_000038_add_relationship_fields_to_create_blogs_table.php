<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::table('create_blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id', 'category_fk_4609725')->references('id')->on('blog_categories');
        });
    }
}
