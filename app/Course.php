<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

   protected $table='courses';
   protected $fillable=[
   		'name',
	   	'information',
		'teacher_id',
		'category_id',
   		'cost',
   		'section',
   		'videos',
   		'quiz',
   		'language',
   		'level',
   		'duration',
   		'enrolled_student',
   		'confirm'
   ];
   public function getRouteName()
   {
	   return 'slug';
   }

   public function teacher()
   	{
        return $this->belongsTo('App\Teacher');
	}
	public function category()
	{
        return $this->belongsTo('App\CourseCategory');
	}
	public function sections()
	{
		return $this->hasMany('App\CourseSection');
	}
	public function lessons()
	{
		return $this->hasMany('App\Lesson');
	}
	
	
	
}
