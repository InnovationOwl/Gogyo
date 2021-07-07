<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('transaction_id');
            $table->bigInteger('shipping_id');
            $table->bigInteger('member_id');
            $table->bigInteger('region_id');
            $table->bigInteger('currency_id');
            $table->uuid('cart_uuid');
            $table->uuid('transaction_uuid');
            $table->uuid('shipping_uuid');
            $table->uuid('member_uuid');
            $table->uuid('region_uuid');
            $table->uuid('currency_uuid');
            $table->string('coupon_code');
            $table->float('discount');
            $table->float('coupon_discount');
            $table->float('subtotal');
            $table->float('total');
            $table->float('shipping_fee');
            $table->float('points');
            $table->string('same_billing_shipping');
            $table->string('shipping_method');
            $table->string('sf_code');
            $table->string('with_registered_mail');
            $table->string('payment_method');
            $table->datetime('checkout_dt');
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
        Schema::dropIfExists('cart');
    }
}