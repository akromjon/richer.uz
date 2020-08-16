<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Section;
use App\Course;
use App\Lesson;
use App\Teacher;
use App\User;
use App\CourseCategory;
use App\Question;
use App\Article;
use App\CourseComment;
use App\ArticleComment;
use App\LessonComment;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
  public function index()
  {
    $teachers=Teacher::all();
    $courses=Course::all();
    $lessons=Lesson::all();
    $questions=Question::all();
    $articles=Article::all();
    $comments=CourseComment::all()->count()+ArticleComment::all()->count()+LessonComment::all()->count();
    
    return view('admin_system.dashboard',compact('teachers','courses','lessons','questions','articles','comments'));
  } 

}