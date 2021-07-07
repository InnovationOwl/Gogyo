<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
            $table->bigInteger('parent_id');
            $table->uuid('category_uuid');
            $table->uuid('product_uuid');
            $table->integer('level');
            $table->string('code');
            $table->string('name_tc');
            $table->string('name_sc');
            $table->string('name_en');
            $table->string('name_jp');
            $table->string('desc_tc');
            $table->string('desc_sc');
            $table->string('desc_en');
            $table->string('desc_jp');
            $table->integer('status', 2);
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
        Schema::dropIfExists('category');
    }
}