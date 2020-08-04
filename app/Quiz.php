<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table="quizes";
    
    protected $fillable=[
        'name',
        'slug',
        'section_id',
        'course_id',
        'show'
    ];
    

    public function section()
    {
        return $this->belonsTo('App\Section');
    }
    public function course()
    {
        return $this->belonsTo('App\Course');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}   

