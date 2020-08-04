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
use App\Quiz;



class CoursesController extends Controller
{
    public function index(Request $request)
    {   
        $course_categories=CourseCategory::all();
        $courses=Course::all();           
        return view('course.all_courses',compact('courses','course_categories'));
    }
    public function view($slug)
    { 
              
        $courses=Course::where('slug','=',$slug)->firstOrFail(); 
        if($courses->confirm==1)
        {
            
        }
        else
        {
          return redirect('/404');
        }              
        return view('course.single_course',compact('courses'));
    }
    public function update(Request $request, $id)
    {
        $course=Course::find($id);
        $course->visit_count=$request->input('visitCount');
        $course->save();
        

    }
    
   
   

    
    

    
   
}
