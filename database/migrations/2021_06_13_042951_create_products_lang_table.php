<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_lang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('products_id');
            $table->uuid('products_lang_uuid');
            $table->uuid('products_uuid');
            $table->string('lang');
            $table->string('name');
            $table->text('meta_desc')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('detail_desc')->nullable();
            $table->text('usage_desc')->nullable();
            $table->text('instructions')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_lang');
    }
}