<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('menu_id');
            $table->uuid('page_uuid');
            $table->string('title_tc');
            $table->string('title_sc');
            $table->string('title_en');
            $table->string('title_jp');
            $table->text('desc_tc');
            $table->text('desc_sc');
            $table->text('desc_en');
            $table->text('desc_jp');
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
        Schema::dropIfExists('page');
    }
}