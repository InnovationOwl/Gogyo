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
            $table->json('name');
            $table->json('meta_desc')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->json('description')->nullable();
            $table->json('detail_desc')->nullable();
            $table->json('usage_desc')->nullable();
            $table->json('instructions')->nullable();
            $table->double('price', 13, 2);
            $table->double('discount_price', 13, 2)->nullable();
            $table->integer('qty');
            $table->integer('mini_order_qty')->nullable();
            $table->integer('alert_qty')->nullable();
            $table->integer('coming_soon')->nullable();
            $table->integer('special_product')->nullable();
            $table->integer('hot_product')->nullable();
            $table->integer('new_product')->nullable();
            $table->integer('sale_product')->nullable();
            $table->integer('status');
            $table->string('youtube_link')->nullable();
            $table->float('weight', 13, 2)->nullable();
            $table->float('height', 13, 2)->nullable();
            $table->float('width', 13, 2)->nullable();
            $table->text('remarks')->nullable();
            $table->datetime('promotion_expiry_dt');
            $table->uuid('created_by')->nullable();
            $table->uuid('updated_by')->nullable();
            $table->uuid('deleted_by')->nullable();
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