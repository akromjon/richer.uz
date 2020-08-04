<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table="options";
    protected $fillable=
    [
        'name',
        'answer',
        'quiz_id'
    ];
    public function question()
    {
        return $this->belongsTo('App\Question');
    }

}
