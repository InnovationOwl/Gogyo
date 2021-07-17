<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('blog_category_uuid');
            $table->uuid('blog_uuid');
            $table->json('name')->nullable();
            $table->json('desc')->nullable();
            $table->json('meta_title')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->string('url')->nullable();
            $table->string('video_link')->nullable();
            $table->datetime('post_dt')->nullable();
            $table->integer('is_highlight')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('blog');
    }
}