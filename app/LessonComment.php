<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LessonComment extends Model
{
    protected $table="lesson_comments";
    protected $fillable=
    [
        'name',
        'content',
        'user_id',
        'lesson_id',
        'confirm',
        'browser',
        'ip_address',
        'device_type',
        'operation_system'
    ];
    public function article()
    {
       return $this->belongsTo('App\Lesson');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
