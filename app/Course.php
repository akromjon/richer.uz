<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	//

	protected $table = 'courses';
	protected $fillable = [
		'name',
		'image',
		'information',
		'teacher_id',
		'category_id',
		'cost',		
		'language',
		'level',
		'duration',
		'enrolled_student',
		'confirm',
		'meta_description',
		'meta_keywords',
		'visit_count'
	];
	//    public function getRouteName()
	//    {
	// 	   return 'slug';
	//    }

	public function teacher()
	{
		return $this->belongsTo('App\Teacher');
	}

	public function sections()
	{
		return $this->hasMany('App\Section');
	}
	public function lessons()
	{
		return $this->hasMany(Lesson::class);
	}
	public function course_categories()
	{
		return $this->belongsTo(CourseCategory::class);
	}
	public function comments()
	{
		return $this->hasMany('App\Comment');
	}
	public function quizes()
	{
		return $this->hasMany(Quiz::class);
	}
}
