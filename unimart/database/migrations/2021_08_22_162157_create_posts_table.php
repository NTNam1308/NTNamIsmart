<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',400);
            $table->text('content');
            $table->text('desc');   // Mô tả bài viết 
            $table->string('thumbnail');
            $table->unsignedBigInteger('post_id');
            $table->enum('status',[1,2]);
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('postcats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
