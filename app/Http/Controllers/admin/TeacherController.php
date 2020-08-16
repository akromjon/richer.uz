<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{

    public function add()
    {
        return view('admin_system.teachers.create');
    }
   
    public function create(Request $request)
    {
        $teacher= new Teacher();        
        $teacher->name=$request['name'];
        $teacher->teacher_id=$request['teacher_id'];
        $teacher->username=$request['username'];
        if($request->hasfile('avatar'))
        {
            $image=$request->file('avatar');
            // // $extention=$image->getClientOrginalExtention();          
            // $name=$image->getClientOriginalName();
            // $imagename=$name;                
            $image->store("files/teachers/","storage");
            $teacher->avatar="/storage/files/teachers/".$image->hashName();          
        }
        else 
        {
            return $request;
            $teacher->avatar;
        }
        // $teacher->avatar=$request->file('avatar')->store('files/images/teachers');
        $teacher->information=$request['information'];
        $teacher->confirm=$request['confirm'];
        $teacher->address=$request['address'];
        $teacher->phone_number=$request['phone_number'];
        $teacher->email=$request['email'];
        $teacher->subject=$request['subject'];
        $teacher->resume=$request['resume'];
        $teacher->save();
        return redirect()->back();
    }
    public function index()
    {
        $teachers=Teacher::all();
        return view('admin_system.teachers.index',compact('teachers'));
    }
    public function edit($id)
    {
        $teacher=Teacher::findOrFail($id);
        return view('admin_system.teachers.edit',compact('teacher'));

    }
    public function update(Request $request, $id)
    {
        $teacher=Teacher::findOrFail($id); 
        $teacher->id=$request['teacher_id'];
        $teacher->name=$request['name'];
        $teacher->username=$request['username'];
        if($request->hasfile('avatar'))
        {
            $image=$request->file('avatar');                          
            $image->store("files/teachers/","storage");
            $teacher->avatar="/storage/files/teachers/".$image->hashName(); 
        }
        else 
        {   
            $teacher->avatar=$request['avatar'];
        }
        $teacher->information=$request['information'];
        $teacher->confirm=$request['confirm'];
        $teacher->address=$request['address'];
        $teacher->phone_number=$request['phone_number'];
        $teacher->email=$request['email'];
        $teacher->subject=$request['subject'];
        $teacher->resume=$request['resume'];
        $teacher->save();
        return redirect()->back();


    }
    public function destroy($id)
    {
        $lesson=Teacher::findOrFail($id);      
        $lesson->delete();
        return redirect()->back();
    }
   
    
}
