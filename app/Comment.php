<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $fillable=
    [
        'name',
        'content',
        'user_id',
        'article_id',
        'course_id',
        'lesson_id',
        'browser',
        'ip_address',
        'device_type',  
        'operation_system'

    ];
    public function lessons()
    {
        return $this->belongsTo('App\Lesson');
    }
    
    public function quizes()
    {
        return $this->belongsTo('App\Lesson');
    }

}
