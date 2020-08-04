<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class LessonsController extends Controller
{
    public function lesson( $slug,$title)
    {                
        // $courses=Course::first();
        // $all_sections=Section::all();
        // $courses=Course::where('slug','=',$slug)->firstOrFail();
        $courses=Course::where('slug','=',$slug)->firstOrFail();
        $video=Lesson::where('slug','=',$title)->firstOrFail(); 
       
        if(($video->course_id==$courses->id) && ($courses->confirm==1)) 
        {
            
        }
        else
        {
          return redirect('/404');
        }
        return view('course.single',compact('video','courses'));
    }
}
