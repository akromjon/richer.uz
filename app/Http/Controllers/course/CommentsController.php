<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;
use App\Helpers\UserInfoHelper;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Lesson;
use App\Comment;
use App\Quiz;




class CommentsController extends Controller
{
    public function store(Request $request)
    { 
        $this->validate(request(),['content'=>'required|min:3']);
        $comment=new Comment;
        $comment->name=$request['name'];
        $comment->user_id=$request['user_id'];
        $comment->article_id=$request['article_id'];
        $comment->content=$request['content'];
        $comment->course_id=$request['course_id'];
        $comment->lesson_id=$request['lesson_id'];
        $comment->browser=UserInfoHelper::get_browsers();
        $comment->ip_address=UserInfoHelper::get_ip();
        $comment->device_type=UserInfoHelper::get_device();
        $comment->operation_system=UserInfoHelper::get_os();
        $comment->save();
        return back();
    }
    public function test($id,$title)
    {                
        // $courses=Course::first();
        // $all_sections=Section::all();
        // $courses=Course::where('id','=',$slug)->firstOrFail();
        $courses=Course::where('slug','=',$id)->first();
        $quiz=Quiz::where('slug','=',$title)->first();
        
        return view('course.quiz',compact('quiz','courses'));
    }
    public function update(Request $request, $id)
    {
        $course=Course::find($id);
        $course->visit_count=$request->input('visitCount');
        $course->save();
        return back();

    }
   
}
