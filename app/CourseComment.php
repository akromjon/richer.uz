<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseComment extends Model
{   
    protected $table="course_comments";
    protected $fillable=
    [
        'name',
        'content',
        'user_id',
        'course_id',
        'confirm',
        'browser',
        'ip_address',
        'device_type',
        'operation_system'
    ];
    public function course()
    {
       return $this->belongsTo(Course::class);
    }   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
