<?php

namespace App\Http\Controllers\admin;

use App\ArticleComment;
use App\Http\Controllers\Controller;
use App\Helpers\UserInfoHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Course;
use App\CourseComment;
use App\Lesson;
use App\LessonComment;
use App\Article;

class CommentsController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('admin_system.comments.index', compact('courses'));
    }
    public function update_confirmation(Request $request, $id)
    {
        $confirm = CourseComment::findOrFail($id);        
        if ($confirm) {
            $confirm->confirm = $request['confirm'];
            $confirm->save();
            return redirect()->back();
        }
        else{
            return abort(404);
        }
       
    }    


    public function reply_comment(Request $request)
    {
        $reply=new CourseComment;
        $reply->name=$request['name'];
        $reply->content=$request['content'];
        $reply->course_id=$request['course_id'];
        $reply->name=Auth::user()->name;
        $reply->user_id=Auth::id();
        $reply->browser=UserInfoHelper::get_browsers();
        $reply->ip_address=UserInfoHelper::get_ip();
        $reply->device_type=UserInfoHelper::get_device();
        $reply->operation_system=UserInfoHelper::get_os();
        $reply->save();
        return redirect()->back();
    }
    public function edit_course_comment($id)
    {
        $comment=CourseComment::findOrFail($id);
        $courses=Course::all();       
        return view('admin_system.comments.edit_course_comment',compact('comment','courses'));
    }
    public function update_course_comment(Request $request, $id)
    {
        $comment=CourseComment::findOrFail($id);
        $comment->name=$request['name'];
        $comment->content=$request['content'];
        $comment->course_id=$request['course_id'];
        $comment->confirm=$request['confirm'];
        $comment->save();
        return redirect()->back();
    }




    public function course_comment_destroy($id)
    {
        $comment=CourseComment::findOrFail($id);
        $comment->delete();
        return redirect()->back();
    }
    public function lesson_index()
    {
        $lessons=Lesson::all();
        return view('admin_system.comments.index_lesson',compact('lessons'));
    }
    public function edit_lesson_comment($id)
    {
        $comment=LessonComment::findOrFail($id);
        $lessons=Lesson::all();
        return view('admin_system.comments.edit_lesson_comment',compact('comment','lessons'));
    }
    public function update_lesson_comment(Request $request,$id)
    {
        $comment=LessonComment::findOrFail($id);
        $comment->name=$request['name'];
        $comment->content=$request['content'];
        $comment->lesson_id=$request['lesson_id'];
        $comment->confirm=$request['confirm'];       
        $comment->save();
        return redirect()->back();
    }
    public function lesson_comment_destroy($id)
    {
        $comment=LessonComment::findOrFail($id);
        $comment->delete();
        return redirect()->back();

    }
    public function update_lesson_confirmation(Request $request, $id)
    {
        $confirm = LessonComment::findOrFail($id);        
        if ($confirm) {
            $confirm->confirm = $request['confirm'];
            $confirm->save();
            return redirect()->back();
        }
        else{
            return abort(404);
        }
       
    }
    public function reply_lesson_comment(Request $request)
    {
        $reply=new LessonComment();
        $reply->name=$request['name'];
        $reply->content=$request['content'];
        $reply->lesson_id=$request['lesson_id'];
        $reply->name=Auth::user()->name;
        $reply->user_id=Auth::id(); 
        $reply->browser=UserInfoHelper::get_browsers();
        $reply->ip_address=UserInfoHelper::get_ip();
        $reply->device_type=UserInfoHelper::get_device();
        $reply->operation_system=UserInfoHelper::get_os();
        $reply->save();
        return redirect()->back();
    }

    public function article_index()
    {
        $articles=Article::all();
        return view('admin_system.comments.index_article',compact('articles'));
    }
    public function edit_article_comment($id)
    {
        $comment=ArticleComment::findOrFail($id);
        $articles=Article::all();
        return view('admin_system.comments.edit_article_comment',compact('comment','articles'));
    }
    public function update_article_comment(Request $request,$id)
    {
        $comment=ArticleComment::findOrFail($id);
        $comment->name=$request['name'];
        $comment->content=$request['content'];
        $comment->article_id=$request['article_id'];
        $comment->confirm=$request['confirm'];
        $comment->name=Auth::user()->name;
        $comment->user_id=Auth::id(); 
        $comment->save();
        return redirect()->back();
    }
    public function article_comment_destroy($id)
    {
        $comment=ArticleComment::findOrFail($id);
        $comment->delete();
        return redirect()->back();

    }
    public function update_article_confirmation(Request $request, $id)
    {
        $confirm = ArticleComment::findOrFail($id);        
        if ($confirm) {
            $confirm->confirm = $request['confirm'];
            $confirm->save();
            return redirect()->back();
        }
        else{
            return abort(404);
        }
       
    }
    public function reply_article_comment(Request $request)
    {
        $reply=new ArticleComment();
        $reply->name=$request['name'];
        $reply->content=$request['content'];
        $reply->article_id=$request['article_id'];
        $reply->name=Auth::user()->name;
        $reply->user_id=Auth::id(); 
        $reply->browser=UserInfoHelper::get_browsers();
        $reply->ip_address=UserInfoHelper::get_ip();
        $reply->device_type=UserInfoHelper::get_device();
        $reply->operation_system=UserInfoHelper::get_os();
        $reply->save();
        return redirect()->back();
    }

   
}
