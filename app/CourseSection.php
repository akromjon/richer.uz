<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseSection extends Model
{
    protected $table="section_course";
    protected $fillable=
    [
        'course_id',
        'name',
        'teacher_id',
        'category_id',
        'user_id',
        'created_at'

    ];
    public function sections()
    {
        return $this->belongsTo('App\Course');
    }
    public function course_category()
    {
        return $this->belongsTo('App\CourseCategory');
    }
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function lessons()
    {
        return $this->hasMany('App\Lesson');
    }
}
