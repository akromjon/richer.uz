<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
           
            $table->id()->unsigned();
            $table->bigInteger('teacher_id')->unsigned()->nullable();
            $table->string('slug')->unique();
            $table->bigInteger('course_categories_id')->unsigned();
            $table->char('name',200);
            $table->string('image')->nullable();
            $table->text('information');
            $table->string('intro');           
            $table->string('cost'); // this changed from integer to string to make some strings      
            $table->string('language'); // it can be uzbek or russian or english
            $table->string('level'); // it can be beginner, elementary, intermediate
            $table->integer ('duration'); // this is the duration of whole course
            $table->boolean('confirm')->default(0); 
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();                        
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');            
            $table->foreign('course_categories_id')->references('id')->on('course_categories')->onDelete('cascade');   
            $table->timestamps();
            // $table->integer('enrolled_students');   
             //$table->char('teacher_username',100)->nullable();        
            
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
