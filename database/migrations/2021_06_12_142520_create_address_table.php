<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('country_id');
            $table->bigInteger('region_id');
            $table->bigInteger('city_id');
            $table->uuid('address_uuid');
            $table->uuid('country_uuid');
            $table->uuid('region_uuid');
            $table->uuid('city_uuid');
            $table->string('line1');
            $table->string('line2');
            $table->string('line3');
            $table->string('room');
            $table->string('floor');
            $table->string('building');
            $table->string('street');
            $table->string('postal_code');
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
        Schema::dropIfExists('address');
    }
}