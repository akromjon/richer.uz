<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_comments', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->char('name',100)->nullable(); //this gets the name of user from the users table
            $table->string('content');
            $table->bigInteger('user_id')->unsigned()->nullable();           
            $table->bigInteger('article_id')->unsigned()->nullable();
            $table->boolean('confirm')->default(1);
            $table->string('browser')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('device_type')->nullable(); 
            $table->string('operation_system')->nullable();            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');           
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
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
        Schema::dropIfExists('article_comments');
    }
}
