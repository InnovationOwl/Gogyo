<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid("member_uuid");
            $table->uuid("contact_uuid");
            $table->uuid("address_uuid");
            $table->string("member_no");
            $table->string("pwd");
            $table->string("login");
            $table->string("email");
            $table->string("subscribe_newsletter_email");
            $table->string("subscribe_newsletter_sms");
            $table->string("referral_name");
            $table->string("agreement");
            $table->string("reset_pwd_hash");
            $table->date("reset_pwd_hash_dt");
            $table->string("hash");
            $table->string("type");
            $table->string("ver_email_cnt");
            $table->string("ver_dt");
            $table->string("social_network_id");
            $table->string("social_network_type");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
    }
}