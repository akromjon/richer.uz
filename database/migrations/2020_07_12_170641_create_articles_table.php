<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->char('title',150);
            $table->string('slug')->unique();
            $table->string('cover_picture')->nullable(); // this is cover picture
            $table->longText('content'); // this is a content which gets a long text
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('blog_id')->unsigned();
            $table->string('tags')->nullable();
            $table->char('writer',100)->nullable();
            $table->string('rescourse')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('blog_id')->references('id')->on('blog_categories');
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
        Schema::dropIfExists('articles');
    }
}
