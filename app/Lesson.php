<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table="lessons";
    protected $fillabe=[
        'name',
        'slug',
        'duration',
        'video',
        'section_id',
    ];
    public function CourseSection()
    {
        return $this->belongsTo('App\CourseSection');
    }
    public function courses()
    {
        return $this->belongsTo('App\Course');
    }
}
