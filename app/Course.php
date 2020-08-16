<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


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
		'confirm',
		'meta_description',
		'meta_keywords',
		'visit_count'
	];	

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}

	public function sections()
	{
		return $this->hasMany(Section::class);
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
        return $this->hasMany(CourseComment::class)->orderBy('id','DESC');
    }
	public function quizes()
	{
		return $this->hasMany(Quiz::class);
	}
}
