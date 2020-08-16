<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;
use App\Helpers\UserInfoHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CourseComment;
use App\LessonComment;





class CommentsController extends Controller
{
    public function store_course_comment(Request $request)
    { 
        $this->validate(request(),
        ['content'=>'required|min:3|max:100']
        );
        $comment=new CourseComment;
        $comment->name=Auth::user()->name;
        $comment->user_id=Auth::id();  
        $comment->content=$request['content'];
        $comment->course_id=$request['course_id'];       
        $comment->browser=UserInfoHelper::get_browsers();
        $comment->ip_address=UserInfoHelper::get_ip();
        $comment->device_type=UserInfoHelper::get_device();
        $comment->operation_system=UserInfoHelper::get_os();
        $comment->save();
        return redirect()->back();
    }
    public function store_lesson_comment(Request $request)
    { 
        $this->validate(request(),
        ['content'=>'required|min:3|max:100']
        );
        $comment=new LessonComment();
        $comment->name=Auth::user()->name;
        $comment->user_id=Auth::id();        
        $comment->content=$request['content'];
        $comment->lesson_id=$request['lesson_id'];       
        $comment->browser=UserInfoHelper::get_browsers();
        $comment->ip_address=UserInfoHelper::get_ip();
        $comment->device_type=UserInfoHelper::get_device();
        $comment->operation_system=UserInfoHelper::get_os();
        $comment->save();
        return redirect()->back();
    }
   
   
}
