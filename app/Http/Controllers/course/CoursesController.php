<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Course;
use App\Teacher;
use App\CourseCategory;
use App\Section;
use App\Lesson;
use App\Comment;
use App\User;



class CoursesController extends Controller
{
    public function index()
    {   
        $course_categories=CourseCategory::all();
        $courses=Course::all();           
        return view('course.all_courses',compact('courses','course_categories'));
    }
    public function view($slug)
    {         
        $courses=Course::where('slug','=',$slug)->firstOrFail();              
        return view('course.single_course',compact('courses'));
    }
    
    public function single($id,$title)
    {                
        // $courses=Course::first();
        // $all_sections=Section::all();
        // $courses=Course::where('slug','=',$slug)->firstOrFail();
        $courses=Course::where('slug','=',$id)->firstOrFail();
        $video=Lesson::where('slug','=',$title)->firstOrFail();    
        if($video->course_id==$courses->id)
        {}
        else
        {
          return redirect('/404');
        }
        return view('course.single',compact('video','courses'));
    }
    

    
   
}
