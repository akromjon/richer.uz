<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
   	

   protected $table='teachers';
   protected $fillable=[	
	'name',
	'teacher_id',
   	'username',
   	'avatar',
   	'information',
   	'confirm',
   	'address',
   	'phone_number',
   	'subject',
   	'resume'   	
   ];
   
   public function courses()
   {
	   $this->hasMany('App\Course');
   }
    
}
