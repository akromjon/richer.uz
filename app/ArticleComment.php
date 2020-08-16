<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $table="article_comments";
    protected $fillable=
    [
        'name',
        'content',
        'user_id',
        'article_id',
        'confirm',
        'browser',
        'ip_address',
        'device_type',
        'operation_system'
    ];
    public function article()
    {
       return $this->belongsTo('App\Article');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
