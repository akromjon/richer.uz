<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_course', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->unsigned();
            $table->string('name');
            $table->integer('teacher_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('category_id')->references('id')->on('course_category');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('section_course');
    }
}
