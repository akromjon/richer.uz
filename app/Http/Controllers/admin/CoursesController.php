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
            
            $image=$request->file('image');
            // // $extention=$image->getClientOrginalExtention();          
            // $name=$image->getClientOriginalName();
            // $imagename=$name;                
            $image->store("files/courses/{$request['slug']}","storage");
            $course->image="/storage/files/courses/{$request['slug']}/".$image->hashName();
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
                // // $extention=$image->getClientOrginalExtention();          
                // $name=$image->getClientOriginalName();
                // $imagename=$name;                
                $video->store("files/courses/{$request['slug']}","storage");
                $course->intro="/storage/files/courses/{$request['slug']}/".$video->hashName();              
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
        return redirect()->back();
    }
    public function update_confirmation(Request $request, $id)
    {   
        $confirm = Course::findOrFail($id);        
        if ($confirm) {
            $confirm->confirm = $request['confirm'];
            $confirm->save();
            
        }
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
            $image=$request->file('image');
           
            // // $extention=$image->getClientOrginalExtention();          
            // $name=$image->getClientOriginalName();
            // $imagename=$name;                
            $image->store("files/courses/{$request['slug']}","storage");
            $base64 = base64_encode($image->hashName());
            $course->image="/storage/files/courses/{$request['slug']}/".$image->hashName();
            }
            else 
            {   
                $course->image=$request['image'];
            }
            
            $course->information=$request['information'];
            if($request->hasfile('intro'))
            {
                $video=$request->file('intro');
                // // $extention=$image->getClientOrginalExtention();          
                // $name=$image->getClientOriginalName();
                // $imagename=$name;                
                $video->store("files/courses/{$request['slug']}","storage");
                $course->intro="storage/files/courses/{$request['slug']}/".$video->hashName();  
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
            return redirect()->back();
            
    }
    public function destroy($id)
    {
      $course=Course::findOrFail($id);      
      $course->delete();
      return redirect()->back();
    }
    
}
