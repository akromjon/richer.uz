<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
   protected $table='course_category';
   protected $fillable=[
       'name',
       'teacher_id_number',
       
   ];
   public function course()
   {
       return $this->belongsTo('App\Course');
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
    