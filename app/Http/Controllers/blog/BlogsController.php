<?php

namespace App\Http\Controllers\blog;
use App\Http\Controllers\Controller;
use App\Helpers\UserInfoHelper;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\Blog;
use App\ArticleComment;
use App\User;


use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request)
    {   
        //this is for user page       
        $articles=Article::orderBy('id', 'DESC')->skip(0)
        ->take(8)->get();
        return view('blog.index',compact('articles'));
    }
    public function view($slug)
    {
        // $post = Post::where('slug','=', $slug)->first();
        // this is for user page                
        $article=Article::where('slug','=',$slug)->firstOrFail(); 
        $users=User::all();       
        return view('blog.single_blog',compact('article','users'));
    }
    public function category($slug)
    {
        $blog=Blog::where('slug','=',$slug)->firstOrFail();
        return view('blog.blog_category',compact('blog'));
    }
    public function comment(Request $request)
    {
     
        $this->validate(request(),
        ['content'=>'required|min:3|max:100']
        );
        $comment=new ArticleComment;
        $comment->name=Auth::user()->name;
        $comment->user_id=Auth::id();  
        $comment->article_id=$request['article_id'];
        $comment->content=$request['content'];            
        $comment->browser=UserInfoHelper::get_browsers();
        $comment->ip_address=UserInfoHelper::get_ip();
        $comment->device_type=UserInfoHelper::get_device();
        $comment->operation_system=UserInfoHelper::get_os();
        $comment->save();
        return back();
    }
    

    

}
