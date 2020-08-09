<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table="sections";
    protected $fillable=
    [
        'name',
        'course_id',        
        'teacher_id',             
        'created_at'

    ];
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function quizes()
    {
        return $this->hasMany(Quiz::class);
    }
    // public function sections()
    // {
    //     return $this->belongsTo('App\Course');
    // }
    // public function course_category()
    // {
    //     return $this->belongsTo('App\CourseCategory');
    // }
    // public function teacher()
    // {
    //     return $this->hasMany('App\Teacher');
    // }
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
  
}
