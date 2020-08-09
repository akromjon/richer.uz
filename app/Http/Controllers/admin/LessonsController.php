<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Teacher;
use App\Course;
use App\Lesson;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::all();
        return view('admin_system.lessons.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $courses=Course::all();
        return view('admin_system.lessons.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lesson=new Lesson;
        
        $lesson->name=$request['name'];
        $lesson->slug=$request['slug'];
        $lesson->content=$request['content'];
        $lesson->duration=$request['duration'];
        $folder=$request['slug']; // html-css
        $course_folder=$request['course_folder']; //beginner        
        
        if($request->hasfile('video'))
        {
            $video=$request->file('video');
            $extention=$video->getClientOriginalExtension();
            $name=$video->getClientOriginalName();
            $videoname=$name;                
            $video->move('files/courses/'.$course_folder.'/'.$folder,$videoname);
            $lesson->video=$videoname;
        }
       
        $lesson->section_id=$request['section_id'];
        $lesson->course_id=$request['course_id'];
        $lesson->save();
        return back();
       
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
