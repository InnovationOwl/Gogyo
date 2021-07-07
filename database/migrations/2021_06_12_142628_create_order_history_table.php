<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('order_history_uuid');
            $table->bigInteger('cart_id');
            $table->bigInteger('transaction_id');
            $table->bigInteger('member_id');
            $table->uuid('cart_uuid');
            $table->uuid('transaction_uuid');
            $table->uuid('member_uuid');
            $table->string('member_email')->nullable();
            $table->string('invoice_no')->nullable();
            $table->string('coupon_discount')->nullable();
            $table->string('discount')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('total')->nullable();
            $table->string('sf_code')->nullable();
            $table->string('points')->nullable();
            $table->string('currency')->nullable();
            $table->string('shipping')->nullable();
            $table->string('exchange_rate')->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('lang')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('with_registered_mail')->nullable();
            $table->string('district_type')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('courier')->nullable();
            $table->string('shipping_email')->nullable();
            $table->string('shipping_title')->nullable();
            $table->string('shipping_first_name')->nullable();
            $table->string('shipping_last_name')->nullable();
            $table->string('shipping_tel')->nullable();
            $table->string('shipping_fax')->nullable();
            $table->string('shipping_mobile')->nullable();
            $table->string('shipping_line1')->nullable();
            $table->string('shipping_line2')->nullable();
            $table->string('shipping_line3')->nullable();
            $table->string('shipping_room')->nullable();
            $table->string('shipping_floor')->nullable();
            $table->string('shipping_building')->nullable();
            $table->string('shipping_street')->nullable();
            $table->string('shipping_district')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_postal_code')->nullable();
            $table->string('shipping_country_code')->nullable();
            $table->string('shipping_region_code')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_title')->nullable();
            $table->string('billing_first_name')->nullable();
            $table->string('billing_last_name')->nullable();
            $table->string('billing_tel')->nullable();
            $table->string('billing_fax')->nullable();
            $table->string('billing_mobile')->nullable();
            $table->string('billing_line1')->nullable();
            $table->string('billing_line2')->nullable();
            $table->string('billing_line3')->nullable();
            $table->string('billing_room')->nullable();
            $table->string('billing_floor')->nullable();
            $table->string('billing_building')->nullable();
            $table->string('billing_street')->nullable();
            $table->string('billing_district')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('billing_country_code')->nullable();
            $table->float('return_points')->nullable();
            $table->text('remarks')->nullable();
            $table->string('status')->nullable();
            $table->integer('status_returned')->nullable();
            $table->integer('status_delivered')->nullable();
            $table->datetime('payment_dt')->nullable();
            $table->datetime('order_close_dt')->nullable();
            $table->datetime('shipping_dt')->nullable();
            $table->datetime('invoice_dt')->nullable();
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
        Schema::dropIfExists('order_history');
    }
}