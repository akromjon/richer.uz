<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table="answers";
    protected $fillable=
    [
        'answer',
        'quiz_id',
        'user_id',
        'question_id',
        'mark'        
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
