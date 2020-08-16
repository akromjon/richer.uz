<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class LessonsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function lesson($slug, $title)
  {

    $courses = Course::where('slug', '=', $slug)->firstOrFail();
    $video = Lesson::where('slug', '=', $title)->firstOrFail();
    if (($video->course_id == $courses->id) && ($courses->confirm == 1)) {
      return view('course.lesson', compact('video', 'courses'));
    } else {
      return abort(404);
    }
  }
}
