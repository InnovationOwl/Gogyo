<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('order_uuid');
            $table->uuid('cart_uuid');
            $table->uuid('transaction_uuid');
            $table->uuid('shipping_address_uuid');
            $table->uuid('member_uuid')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('invoice_no')->nullable();
            $table->float('coupon_discount')->nullable();
            $table->float('discount')->nullable();
            $table->float('subtotal', 13, 2)->nullable();
            $table->string('total')->nullable();
            $table->string('sf_code')->nullable();
            $table->string('points')->nullable();
            $table->string('currency')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('lang')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('district_type')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('courier')->nullable();
            $table->float('return_points', 13, 2)->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->nullable();
            $table->integer('status_returned')->nullable();
            $table->integer('status_delivered')->nullable();
            $table->datetime('payment_dt')->nullable();
            $table->datetime('order_close_dt')->nullable();
            $table->datetime('shipping_dt')->nullable();
            $table->datetime('invoice_dt')->nullable();
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
        Schema::dropIfExists('order');
    }
}