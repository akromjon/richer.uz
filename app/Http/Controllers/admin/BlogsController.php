<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\Teacher;
use App\Article;
class BlogsController extends Controller
{
    
    public function index()
    {   
        $categories=Blog::orderBy('id','DESC')->get();
        $teachers=Teacher::all();
        return view('admin_system.blogs.index',compact('categories','teachers'));
    }   
   
    public function store_category(Request $request)
    {
        $blog=new Blog;
        $blog->title=$request['title'];
        $blog->icon=$request['icon'];
        $blog->slug=$request['slug'];
        $blog->user_id=$request['user_id'];
        $blog->save();
        return redirect()->back();
    }
    public function store_article(Request $request)
    {
        $article=new Article;
        $article->title=$request['title'];       
        $article->slug=$request['slug'];
        if($request->hasfile('cover_picture'))
        {
            $image=$request->file('cover_picture');                       
            $image->store("files/blogs/articles/{$request['blog_id']}","storage");           
            $article->cover_picture = "/storage/files/blogs/articles/{$request['blog_id']}/" . $image->hashName();
        }
        else 
        {
            return $request;
            $article->cover_picture;
        }
        $article->content=$request['content'];
        $article->blog_id=$request['blog_id'];
        $article->tags=$request['tags'];
        $article->writer=$request['writer'];
        $article->rescourse=$request['rescourse'];
        $article->meta_description=$request['meta_description'];
        $article->meta_keywords=$request['meta_keywords'];
        $article->save();
        return redirect()->back();
    }

    
    public function edit_article($id)
    {
        $article=Article::findOrFail($id);
        $categories=Blog::all();
        $teachers=Teacher::all();
        return view('admin_system.blogs.edit_article',compact('article','categories','teachers'));
    }

   
    public function edit_category($id)
    {
        $category=Blog::findOrFail($id);
        
        return view('admin_system.blogs.edit_category',compact('category'));
    }
     
    public function update_article(Request $request, $id)
    {
        $article=Article::findOrFail($id);
        $article->title=$request['title'];
        $article->slug=$request['slug'];
        if($request->hasfile('cover_picture'))
        {
            $image=$request->file('cover_picture');
            // // $extention=$image->getClientOrginalExtention();          
            // $name=$image->getClientOriginalName();
            // $imagename=$name;                
            $image=$request->file('cover_picture');                       
            $image->store("files/blogs/articles/{$request['blog_id']}","storage");           
            $article->cover_picture = "/storage/files/blogs/articles/{$request['blog_id']}/" . $image->hashName();
        }
        else 
        {            
            $article->cover_picture=$request['cover_picture'];
        }
        $article->content=$request['content'];
        $article->blog_id=$request['blog_id'];
        $article->tags=$request['tags'];
        $article->writer=$request['writer'];
        $article->rescourse=$request['rescourse'];
        $article->meta_description=$request['meta_description'];
        $article->meta_keywords=$request['meta_keywords'];
        $article->save();
        return redirect()->back();
        
    }
   
    public function update_category(Request $request, $id)
    {
        $blog=Blog::findOrFail($id);
        $blog->title=$request['title'];
        $blog->icon=$request['icon'];
        $blog->slug=$request['slug'];
        $blog->save();
        return redirect()->back();
    }

    
    public function destroy_category($id)
    {
        $category=Blog::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
    public function destroy_article($id)
    {
        $article=Article::findOrFail($id);
        $article->delete();
        return redirect()->back();
    }
}
