<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function teacher()
    {
      return view('admin.teachers.create');  
    }
    public function all()
    {
        return view('admin.teachers.index');
    }
    public function home()
    {
      return view('admin.layouts.app');
    }
}
