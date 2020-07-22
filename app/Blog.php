<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blog_categories";
    protected $fillable=[
        'title',
        'icon',
        'user_id'        
    ];
    public function articles()
	{
        return $this->hasMany('App\Article');
    }
    public static function blog_categories()
    {
        return static::all();
        
    }
     
}
