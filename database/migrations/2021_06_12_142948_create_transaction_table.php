<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('transaction_uuid');
            $table->bigInteger('payer_id')->nullable()->unsigned();
            $table->float('mc_gross', 13, 2)->nullable();
            $table->string('mc_currency')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_dt')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('custom')->nullable();
            $table->string('invoice')->nullable();
            $table->string('payer_status')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('business')->nullable();
            $table->string('ipn_track_id')->nullable();
            $table->string('txn_id')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_id')->nullable();
            $table->string('pending_reason')->nullable();
            $table->string('transaction_subject')->nullable();
            $table->string('memo')->nullable();
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
        Schema::dropIfExists('transaction');
    }
}
