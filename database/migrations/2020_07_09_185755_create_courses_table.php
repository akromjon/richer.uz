<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->unsigned()->nullable();
            $table->string('slug')->unique();
            $table->bigInteger('course_category_id')->unsigned();  
            $table->char('name',200);
            $table->text('information');
            $table->string('intro');
            $table->char('teacher_username',100)->nullable();
            $table->integer('cost');
            $table->integer('section');
            $table->integer('videos');
            $table->integer('quiz');
            $table->string('language');
            $table->string('level');
            $table->integer('duration');
            $table->integer('enrolled_students');            
            $table->boolfaean('confirm')->defintroault(0);                       
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');            
            $table->foreign('course_category_id')->references('id')->on('course_category');
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
        Schema::dropIfExists('courses');
    }
}
