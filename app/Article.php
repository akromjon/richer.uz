<?php

namespace App;
use App\Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table="articles";
    protected $fillable=
    [
        'title',
        'slug',
        'cover_picture',
        'content',
        'user_id',
        'blog_id',
        'tags',
        'writer',
        'rescourse'        
    ];
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
    public function getRouteName()
    {
    	return 'slug';
    }
    public static function articles()
    {
        return static::all();
        
    }
    public function user()
    {
        return $this->BelongsTo('App\User');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
