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
   
//    public function courses()
//    {
// 	   $this->hasMany('App\Course');
//    }
	public function CourseCategories()
	{
		return $this->hasMany('App\CourseCategory');
	}
	public function courses()
	{
		return $this->hasMany('App\Course');
	}
	public function sections()
	{
		return $this->hasMany('App\Section');
	}
    
}
