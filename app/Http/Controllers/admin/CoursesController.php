<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Teacher;
use App\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $teachers=Teacher::all();
        return view('admin_system.courses.index',compact('teachers'));
    }
    public function edit($id)
    {
        $course=Course::findOrFail($id);
        $teachers=Teacher::all();
        return view('admin_system.courses.edit',compact('course','teachers'));
    }
    
    public function add()
    {
        $teachers=Teacher::all();
        return view('admin_system.courses.create',compact('teachers'));
    }
    public function create(Request $request)
    {
        $course=new Course;
        $request->validate([
        'slug' => ['required', 'unique:courses', 'max:255'],
        'image' =>['mimes:png,jpeg,jpg,gif|max:400|required'],
        'video' =>['mimes:mp4|max:25600|required']
        ]);
        $course->teacher_id=$request['teacher_id'];
        $course->slug=$request['slug'];
        $course->course_categories_id=$request['course_categories_id'];
        $course->name=$request['name'];
        $folder=$request['slug'];

        if($request->hasfile('image'))
        {
            
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $name=$file->getClientOriginalName();
            $filename=$name;       
            $file->move('files/courses/'.'/'.$folder,$filename);
            $course->image=$filename;
        }
        else 
        {   
            return $request;
            $course->image;
        }
        
        $course->information=$request['information'];
        if($request->hasfile('intro'))
        {
                $video=$request->file('intro');
                $extention=$video->getClientOriginalExtension();
                $name=$video->getClientOriginalName();
                $videoname=$name;                
                $video->move('files/courses/'.'/'.$folder,$videoname);
                $course->intro=$videoname;
        }
        else 
        {   
            return $request;
            $course->intro;
        }        
        $course->cost=$request['cost'];
        $course->language=$request['language'];
        $course->level=$request['level'];
        $course->duration=$request['duration'];
        $course->confirm=$request['confirm'];
        $course->meta_description=$request['meta_description'];
        $course->meta_keywords=$request['meta_keywords'];
        $course->save();
        return back();
    }

    public function update(Request $request, $id)
    {
        $course=Course::findOrFail($id);       
     
            $course->teacher_id=$request['teacher_id'];
            $course->slug=$request['slug'];
            $course->course_categories_id=$request['course_categories_id'];
            $course->name=$request['name'];
            $folder=$request['slug'];
    
            if($request->hasfile('image'))
            {                
                $file=$request->file('image');
                $extention=$file->getClientOriginalExtension();
                $name=$file->getClientOriginalName();
                $filename=$name;
                $file->move('files/courses/'.'/'.$folder,$filename);
                $course->image=$filename;
            }
            else 
            {   
                $course->image=$request['image'];
            }
            
            $course->information=$request['information'];
            if($request->hasfile('intro'))
            {
                $video=$request->file('intro');
                $extention=$video->getClientOriginalExtension();
                $name=$video->getClientOriginalName();
                $videoname=$name;                
                $video->move('files/courses/'.'/'.$folder,$videoname);
                $course->intro=$videoname;
            }
            else 
            {   
               $course->intro=$request['intro'];
            }       
            $course->cost=$request['cost'];
            $course->language=$request['language'];
            $course->level=$request['level'];
            $course->duration=$request['duration'];
            $course->confirm=$request['confirm'];
            $course->meta_description=$request['meta_description'];
            $course->meta_keywords=$request['meta_keywords'];
            $course->save();
            return back();
            
    }
    public function destroy($id)
    {
      $course=Course::findOrFail($id);      
      $course->delete();
      return back();
    }
    
}
