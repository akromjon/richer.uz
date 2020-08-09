<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table="lessons";
    protected $fillabe=[
        'name',
        'slug',
        'content',
        'duration',
        'video',
        'section_id',
        'course_id'
    ];
    // public function <section></section>()
    // {
    //     return $this->belongsTo('App\CourseSection');
    // }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function section()
    {
        return $this->belonsTo('App\Section');
    }
    // public function getRouteName()
    // {
    //     return 'slug';
    // }
}
