<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Course;
use App\CourseCategory;
use App\Article;

class UsersController extends Controller
{
    
    public function index()
    {
        $courses=Course::all();
        $articles=Article::orderBy('id', 'DESC')->get();
        $course_categories=CourseCategory::all();
        return view('index.index',compact('courses','course_categories','articles'));
    }
   
    
}
