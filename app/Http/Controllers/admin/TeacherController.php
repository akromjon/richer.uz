<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function teacher()
    {   $teachers=Teacher::all();
        return view('admin.teachers.create',compact('teachers'));
    }
    public function add(Request $request)
    {
        $teacher= new Teacher();        
        $teacher->name=$request['name'];
        $teacher->teacher_id=$request['teacher_id'];
        $teacher->username=$request['username'];
        if($request->hasfile('avatar'))
        {
            $file=$request->file('avatar');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('files/images/teachers',$filename);
            $teacher->avatar=$filename;
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
        return redirect('/admin/teacher/view')->with('success','Done');
    }
    public function view()
    {
        $teachers=Teacher::all();
        return view('admin.teachers.index',compact('teachers'));
    }
    public function home()
    {
        $teachers=Teacher::all();
        return view('admin.layouts.app',compact('teachers'));
    }
    
}
