<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Option;
use App\Section;
use App\Quiz;
use App\Question;

class QuizesController extends Controller
{
    
    public function index()
    {
            $courses=Course::all();
            $sections=Section::all();
            $quizes=Quiz::all();
            $questions=Question::orderBy('id','desc')->get();
            return view('admin_system.quizes.index',compact('courses','sections','quizes','questions'));
    }

  
    public function create_quiz_categories(Request $request)
    {
            $quiz=new Quiz;
            $quiz->name=$request['name'];
            $quiz->slug=$request['slug'];
            $quiz->section_id=$request['section_id'];
            $quiz->course_id=$request['course_id'];
            $quiz->show=$request['show'];
            $quiz->save();
            return redirect()->back();
    }

    public function create_quiz_questions(Request $request)
    {
            $question=new Question;
            $question->name=$request['name'];
            $question->quiz_id=$request['quiz_id'];
            $question->answer=$request['answer'];
            $question->save();
            return redirect()->back();
    }

    public function create_quiz_options(Request $request)
    {
        /************************ */
        /*********************** */
            $option_a=new Option;
            $option_a->name=$request['name_a'];
            $option_a->question_id=$request['question_id'];
            $option_a->save();
            /////////////////////////            
            $option_b=new Option;
            $option_b->name=$request['name_b'];
            $option_b->question_id=$request['question_id'];
            $option_b->save();
            ///////////////////////
            $option_c=new Option;
            $option_c->name=$request['name_c'];
            $option_c->question_id=$request['question_id'];
            $option_c->save();
            ///////////////////////
            $option_d=new Option;
            $option_d->name=$request['name_d'];
            $option_d->question_id=$request['question_id'];          
            $option_d->save();

            return redirect()->back();

        /********************** */
        /********************* */
            
    }

    public function edit_category($id)
    {
            $category=Quiz::findOrFail($id);
            $courses=Course::all();
            $sections=Section::all();
            return view('admin_system.quizes.edit_category',compact('category','courses','sections'));
    }
    public function edit_question($id)
    {   
            $quizes=Quiz::all();
            $question=Question::findOrFail($id);        
            return view('admin_system.quizes.edit_question',compact('question','quizes'));
    }
    public function edit_option($id)
    {   
            $question=Question::findOrfail($id);                  
            return view('admin_system.quizes.edit_option',compact('question'));
    }
    public function update_category(Request $request, $id)
    {
            $category=Quiz::findOrFail($id);
            $category->name=$request['name'];
            $category->slug=$request['slug'];
            $category->section_id=$request['section_id'];
            $category->course_id=$request['course_id'];
            $category->show=$request['show'];
            $category->save();
            return redirect()->back();
    }
    public function update_question(Request $request, $id)
    {
            $question=Question::findOrFail($id);
            $question->name=$request['name'];
            $question->quiz_id=$request['quiz_id'];
            $question->answer=$request['answer'];
            $question->show=$request['show'];       
            $question->save();
            return redirect()->back();
    }
    public function update_option(Request $request, $id)
    {
                $option=Option::findOrFail($request['option_1']);            
                $option->name=$request['name_1'];
                $option->question_id=$request['question_id'];
                $option->save();

                $option=Option::findOrFail($request['option_2']);  
                $option->name=$request['name_2'];
                $option->question_id=$request['question_id'];
                $option->save();

                $option=Option::findOrFail($request['option_3']);  
                $option->name=$request['name_3'];
                $option->question_id=$request['question_id'];
                $option->save();
                
                $option=Option::findOrFail($request['option_4']);  
                $option->name=$request['name_4'];
                $option->question_id=$request['question_id'];
                $option->save();
            
                return redirect()->back();
            

    }

    public function destroy_category($id)
    {
            $category=Quiz::findOrFail($id);
            $category->delete();
            return redirect()->back();
    }
    public function destroy_question($id)
    {
            $category=Question::findOrFail($id);
            $category->delete();
            return redirect()->back();
    }
    public function destroy_options($id)
    {
            $question=Question::findOrFail($id);
            foreach($question->options as $option)
            {
                $option->delete();                
            }
            return redirect()->back();
    }

}
