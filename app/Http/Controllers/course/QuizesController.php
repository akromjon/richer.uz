<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Quiz;
use App\Answer;

class QuizesController extends Controller
{
    
    public function quiz($id,$title)
    {                
        // $courses=Course::first();
        // $all_sections=Section::all();
        // $courses=Course::where('id','=',$slug)->firstOrFail();        
        $courses=Course::where('slug','=',$id)->firstOrFail();
        $question_category=Quiz::where('slug','=',$title)->firstOrFail();      
        if($question_category->course_id==$courses->id)
        {
            
        }
        else
        {
          return redirect('/404');
        }       
        
        return view('course.quiz',compact('question_category','courses'));
    }
    public function store(Request $request)
    {
        
        $user_answer=new Answer;        
        $user_answer->answer=$request['answer'];
        $user_answer->quiz_id=$request['quiz_id'];
        $user_answer->user_id=$request['user_id'];
        $user_answer->mark=$request['mark'];      
        $user_answer->save();
        return back();       
       
    }
}
