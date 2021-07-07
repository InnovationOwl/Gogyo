<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('product_uuid');
            $table->string('product_code');
            $table->double('price');
            $table->double('discount_price')->nullable();
            $table->integer('qty');
            $table->integer('mini_order_qty')->nullable();
            $table->integer('alert_qty')->nullable();
            $table->integer('coming_soon')->nullable();
            $table->integer('special_product')->nullable();
            $table->integer('hot_product')->nullable();
            $table->integer('new_product')->nullable();
            $table->integer('sale_product')->nullable();
            $table->integer('status', 2);
            $table->string('youtube_link')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('width')->nullable();
            $table->text('remarks')->nullable();
            $table->datetime('promotion_expiry_dt');
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
        Schema::dropIfExists('products');
    }
}