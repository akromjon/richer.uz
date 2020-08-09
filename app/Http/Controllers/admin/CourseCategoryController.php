<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Teacher;
use App\CourseCategory;


class CourseCategoryController extends Controller
{
    public function index()
    {   
        $teachers=Teacher::all();
        return view('admin_system.course_category.index',compact('teachers'));
    }    
    public function add()
    {   
        $teachers=Teacher::all();
        return view('admin_system.course_category.create',compact('teachers'));
    }
    public function create(Request $request)
    {
        $category=new CourseCategory;
        $category->name=$request['name'];
        $category->teacher_id=$request['teacher_id'];
        $category->save();
        return back();
    }
    public function edit($id)
    {   
        $teachers=Teacher::all();
        $category=CourseCategory::findOrFail($id);
        return view('admin_system.course_category.edit',compact('category','teachers'));
    }
    public function update(Request $request,$id)
    {
        $category=CourseCategory::findOrFail($id);
        $category->name=$request['name'];
        $category->teacher_id=$request['teacher_id'];
        $category->save();
        return back();
    }
    public function destroy($id)
    {
      $lesson=CourseCategory::findOrFail($id);      
      $lesson->delete();
      return back();

    }
   
}
