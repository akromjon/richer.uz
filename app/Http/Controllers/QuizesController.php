<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizesController extends Controller
{
    //this was for Quiz page it is now disabled
    public function index()
    {
        return view('quiz.all_quiz');
    }

    
}
