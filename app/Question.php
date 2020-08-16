<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table="questions";
    
    protected $fillable=[
        'name',        
        'quiz_id',        
    ];
    public function options()
    {
        return $this->hasMany('App\Option');
    }
    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');    
    }
}
