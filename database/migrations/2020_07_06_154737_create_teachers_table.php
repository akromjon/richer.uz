<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->char('name',100);
            $table->string('username')->nullable();
            $table->string('avatar');
            $table->text('information');
            $table->boolean('confirm')->default(1);
            $table->char('address',200)->nullable();
            $table->integer('phone_number')->unsigned();
            $table->string('email')->unique();            
            $table->char('subject',200);
            $table->string('resume')->nullable();            
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
        Schema::dropIfExists('teachers');
    }
}
