<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        return view('user.index');
    }
    public function mycourses()
    {
        return view('user.my_courses');
    }
    // public function chat()
    // {
    //     return view('user.chat');
    // }
}
