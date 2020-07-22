<?php

namespace App\Http\Controllers\blog;
use App\Http\Controllers\Controller;
use App\Article;
use App\Blog;
use App\Comment;


use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {   
        //this is for user page       
        $articles=Article::all();        
        return view('blog.index',compact('articles'));
    }
    public function view($slug)
    {
        // $post = Post::where('slug','=', $slug)->first();
        // this is for user page                
        $article=Article::where('slug','=',$slug)->firstOrFail();        
        return view('blog.single_blog',compact('article'));
    }
    public function category($slug)
    {
        $blog=Blog::where('title','=',$slug)->firstOrFail();
        return view('blog.blog_category',compact('blog'));
    }
    public function comment(Request $request)
    {
     
        $this->validate(request(),['content'=>'required|min:3']);
        $comment=new Comment;
        $comment->name=$request['name'];
        $comment->user_id=$request['user_id'];
        $comment->article_id=$request['article_id'];
        $comment->content=$request['content'];       
        $comment->browser=$request->header('User-Agent');
        $comment->ip_address=$request->ip();
        $comment->device_type=$request->header('User-Agent');
        $comment->save();
        return back();
    }
    

    

}
