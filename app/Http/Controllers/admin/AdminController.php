<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Section;
use App\Course;
use App\Lesson;
use App\Teacher;
use App\User;
use App\CourseCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin_system.dashboard');
  }




    
    public function teacher()
    {
      return view('admin.teachers.create');  
    }
    public function all()
    {
        return view('admin.teachers.index');
    }
    public function home()
    {
      return view('admin.layouts.app');
    }
    public function create()
    {
      $sections=Section::all();
      $courses=Course::all();
      $teachers=Teacher::all();
      $users=User::all();
      $categories=CourseCategory::all();
      return view('admin.sections.create',compact('sections','courses','teachers','users','categories'));
    }
    public function create_section(Request $request)
    {
      $section=new Section;
      $section->name=$request['name'];
      $section->course_id=$request['course_id'];
      $section->teacher_id=$request['teacher_id'];
      $section->category_id=$request['category_id'];
      $section->user_id=$request['user_id'];
      $section->show=$request['show'];
      $section->save();
      return back();
    }
    public function create_lesson()
    {
      $courses=Course::all();
      $sections=Section::all();
      return view('admin.lessons.create',compact('courses','sections'));
    }
    public function add_lesson(Request $request)
    {
       $lesson=new Lesson;
       $lesson->name=$request['name'];
       $lesson->slug=$request['slug'];
       $lesson->content=$request['content'];
       $lesson->duration=$request['duration'];
       $lesson->video=$request['video'];
       $lesson->section_id=$request['section_id'];
       $lesson->course_id=$request['course_id'];
       $lesson->save();
       return back();
    }
    public function all_lessons()
    {
      $lessons=Lesson::all();
      return view('admin/lessons/index',compact('lessons'));
    }
    public function edit_lesson($id)
    {
      $lesson=Lesson::find($id);
      $courses=Course::all();
      $sections=Section::all();
      return view('admin.lessons.edit',compact('lesson','courses','sections'));
    }
    public function update(Request $request, $id)
    {
      $lesson=Lesson::findOrFail($id);
      $lesson->name=$request['name'];
      $lesson->slug=$request['slug'];
      $lesson->content=$request['content'];
      $lesson->duration=$request['duration'];
      $lesson->video=$request['video'];
      $lesson->section_id=$request['section_id'];
      $lesson->course_id=$request['course_id'];
      $lesson->save();
      return back();
    }
    public function destroy($id)
    {
      $lesson=Lesson::findOrFail($id);      
      $lesson->delete();
      return back();

    }

}