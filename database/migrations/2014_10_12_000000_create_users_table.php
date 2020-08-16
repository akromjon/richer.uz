<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->char('state',100)->nullable();
            $table->char('district',100)->nullable();
            /// date of birth
            $table->integer('day')->nullable()->unsigned();
            $table->string('month')->nullable();
            $table->integer('year')->nullable()->unsigned();
            /*************** */
            $table->integer('gender')->nullable()->unsigned();
            $table->string('position')->nullable();
            /************** */
            ////school
            $table->integer('number')->nullable()->unsigned();
            $table->char('school',100)->nullable();
            $table->char('class',100)->nullable();          
            $table->bigInteger('phone_number')->unsigned()->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');          
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
