<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table="lessons";
    protected $fillabe=[
        'name',
        'image', //// cover image
        'slug',
        'content',
        'duration',
        'video',
        'section_id',
        'course_id',
        'meta_description', /// this is for google CEO
        'meta_keywords' /// this is google CEO
    ];
    
    
    public function comments()
    {
        return $this->hasMany('App\LessonComment')->orderBy('id','DESC');
    }
    public function section()
    {
        return $this->belonsTo('App\Section');
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
}
