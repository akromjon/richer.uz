<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

            // this is not migrated yet
            $table->id()->unsigned();
            $table->char('name',100)->nullable(); //this gets the name of user from the users table
            $table->string('content');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('course_id')->unsigned()->nullable();
            $table->bigInteger('lesson_id')->unsigned()->nullable();
            $table->bigInteger('article_id')->unsigned()->nullable();
            $table->boolean('confirm')->default(1);
            $table->string('browser')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device_type')->nullable();            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');     
            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->timestamps();
            // this is not migrated yet
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
