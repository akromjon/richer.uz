<?php

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

namespace App\Http\Controllers\course;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use App\Lesson;
use App\Comment;



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
        $comment->browser=$request->header('User-Agent');
        $comment->ip_address=$request->ip();
        $comment->device_type=$request->header('User-Agent');
        $comment->save();
        return back();
    }
   
}
