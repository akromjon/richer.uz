<?php

namespace App\Http\Controllers\comment;
use App\Http\Controllers\Controller;

    use Illuminate\Http\Request;
    use App\Course;
    use App\User;
    use App\Lesson;
    use App\Comment;



    class CommentController extends Controller
    {
        public function store(Request $request)
        {   

            $comment=new Comment;
            // $comment->name=User::name();
            // $comment->user_id=User::id();
            $comment->name=$request['name'];
            $comment->content=$request['content'];
            $comment->course_id=$request['course_id'];
            $comment->lesson_id=Lesson::id();
            $comment->browser=$_REQUEST['USER_AGENT'];
            $comment->ip_address=Request::ip();
            $comment->device_type=$_REQUEST['USER_AGENT'];
            $comment->save();
            return back();
        }
}
