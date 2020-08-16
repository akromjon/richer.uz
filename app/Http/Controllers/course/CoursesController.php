<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Course;
use App\CourseCategory;



class CoursesController extends Controller
{
    public function index(Request $request)
    {   
        $course_categories=CourseCategory::all();
        $courses=Course::all();        
        return view('course.index',compact('courses','course_categories'));
    }
    public function view($slug)
    { 
              
        $course=Course::where('slug','=',$slug)->firstOrFail(); 
        if($course->confirm==1)
        {
            return view('course.course',compact('course'));
        }
        else
        {
            return abort(404);
        }              
       
    }
   
    
   
   

    
    

    
   
}
