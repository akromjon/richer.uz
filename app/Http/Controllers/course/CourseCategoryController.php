<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\CourseCategory;
use App\Teacher;

class CourseCategoryController extends Controller
{
    public function index()
    {   $course_categories=CourseCategory::all();
        $teachers=Teacher::all();
        return view('admin.courses.course_categories',compact('course_categories','teachers'));
    }
    public function view()
    {
        $teachers=Teacher::all();
        $course_categories=CourseCategory::all();
        return view('admin.courses.create_course_categories',compact('course_categories','teachers'));
    }
    public function create(Request $request)
    {

        $category=new CourseCategory;
        $category->name=$request['name'];
        $category->teacher_id_number=$request['teacher_id'];        
        $category->save();
        return redirect('/admin/courses/categories/view')->with('success','done');

    }
}
