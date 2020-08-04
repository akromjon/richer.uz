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
           
            $table->id()->unsigned();
            $table->bigInteger('teacher_id')->unsigned()->nullable();
            $table->string('slug')->unique();
            $table->bigInteger('course_categories_id')->unsigned();
            $table->char('name',200);
            $table->text('information');
            $table->string('intro');           
            $table->string('cost'); // this changed from integer to string to make some strings
            $table->integer('section');
            $table->integer('videos');
            $table->integer('quiz');
            $table->string('language'); // it can be uzbek or russian or english
            $table->string('level'); // it can be beginner, elementary, intermediate
            $table->integer ('duration'); // this is the duration of whole course
            $table->boolean('confirm')->default(0);
                                 
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');            
            $table->foreign('course_categories_id')->references('id')->on('course_categories')->onDelete('cascade');   
            $table->timestamps();
            // $table->integer('enrolled_students');   
             //$table->char('teacher_username',100)->nullable();        
            
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
