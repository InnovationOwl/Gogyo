<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_unit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('product_unit_uuid');
            $table->text('name')->nullable();
            $table->string('name_tc')->nullable();
            $table->string('name_sc')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_jp')->nullable();
            $table->integer('status', 2);
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
        Schema::dropIfExists('product_unit');
    }
}