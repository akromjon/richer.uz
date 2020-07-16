<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Course;
use App\Teacher;
use App\CourseCategory;
use App\CourseSection;
use App\Lesson;



class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $course_categories=CourseCategory::all();
        $courses=Course::all();
        return view('course.all_courses',compact('courses','course_categories'));
    }
    public function view($slug, Lesson $id)
    {  
        $courses=Course::where('slug','=',$slug)->firstOrFail();  
        $all_sections=CourseSection::all();      
        $sections=CourseSection::all();        
        $lessons=Lesson::all();
        return view('course.single_course',compact('courses','sections','lessons','all_sections'));
    }
    
    public function single($id)
    {
        $courses=Course::find($id);
        $all_sections=CourseSection::all();      
        $sections=CourseSection::all();        
        $lessons=Lesson::all();
        return view('course.single',compact('courses','sections','lessons','all_sections'));
    }
    public function action($id)
    {
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
