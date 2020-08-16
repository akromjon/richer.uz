<?php

namespace App\Http\Controllers\admin;

use App\Comment;
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
        $teachers = Teacher::all();
        return view('admin_system.lessons.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $courses = Course::all();
        return view('admin_system.lessons.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lesson = new Lesson;
        // $folder = $request['slug']; // html-css
        // $course_folder = $request['course_folder']; //beginner  
        $lesson->name = $request['name'];

        $pathToLesson = $request['slug'];
        $pathToCourse=$request['course_folder'];

        if ($request->hasfile('image')) {
            $image = $request->file('image');                         
            $image->store("files/courses/{$pathToCourse}/$pathToLesson", "storage");
            $lesson->image = "/storage/files/courses/{$pathToCourse}/$pathToLesson/" . $image->hashName();
        }
        $lesson->slug = $request['slug'];
        $lesson->content = $request['content'];
        $lesson->duration = $request['duration'];
        // $folder = $request['slug']; // html-css
        // $course_folder = $request['course_folder']; //beginner        

        if ($request->hasfile('video')) {
            $video = $request->file('video');                         
            $video->store("files/courses/{$pathToCourse}/$pathToLesson", "storage");
            $lesson->video = "/storage/files/courses/{$pathToCourse}/$pathToLesson/".$video->hashName();
        }

        $lesson->section_id = $request['section_id'];
        $lesson->course_id = $request['course_id'];
        $lesson->meta_description = $request['meta_description'];
        $lesson->meta_keywords = $request['meta_keywords'];
        $lesson->save();
        return redirect()->back();
    }



    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        $courses = Course::all();
        return view('admin_system.lessons.edit', compact('lesson', 'courses'));
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
        $lesson = Lesson::findOrFail($id);
        $lesson->name = $request['name'];
        $lesson->slug = $request['slug'];
        $pathToLesson = $request['slug'];
        $pathToCourse=$request['course_folder'];
        if ($request->hasfile('image')) {
            $image = $request->file('image');                         
            $image->store("files/courses/{$pathToCourse}/$pathToLesson", "storage");
            $lesson->image = "/storage/files/courses/{$pathToCourse}/$pathToLesson/" . $image->hashName();
        } else {
            $lesson->image = $request['image'];
        }
        $lesson->content = $request['content'];
        $lesson->duration = $request['duration'];        
        if ($request->hasfile('video')) {
            $video = $request->file('video');                         
            $video->store("files/courses/{$pathToCourse}/$pathToLesson", "storage");
            $lesson->video = "/storage/files/courses/{$pathToCourse}/$pathToLesson/".$video->hashName();          
        } else {
            $lesson->video = $request['video'];
        }
        $lesson->course_id = $request['course_id'];
        $lesson->section_id = $request['section_id'];
        $lesson->meta_description = $request['meta_description'];
        $lesson->meta_keywords = $request['meta_keywords'];
        $lesson->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();
        return redirect()->back();
    }
}
