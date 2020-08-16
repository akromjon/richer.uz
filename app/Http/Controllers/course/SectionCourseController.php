<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

class SectionCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('course.single_course',compact('sections'));
    }

    
}
