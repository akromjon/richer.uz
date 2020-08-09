<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
   protected $table='course_categories';
   protected $fillable=[
       'name',
       'teacher_id',
       
   ];
   public function course()
   {
       return $this->hasMany('App\Course');
   }
   
   public function teacher()
   {
      return $this->belongsTo('App\Teacher');
   }
   public function user()
   {
       return $this->belongsTo('App\User');
   }
}
    