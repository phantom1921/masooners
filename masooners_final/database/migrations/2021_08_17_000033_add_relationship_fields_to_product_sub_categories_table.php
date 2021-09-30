<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProductSubCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('product_sub_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_4609534')->references('id')->on('product_categories');
        });
    }
}
