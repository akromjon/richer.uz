<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use App\Section;

class SectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sections=Teacher::all();
        return view('admin_system.sections.index',compact('sections'));
    }

    
    public function add()
    {
        $sections=Teacher::all();
        return view('admin_system.sections.create',compact('sections'));
    }

    
    public function create(Request $request)
    {
        $section=new Section;
        $section->name=$request['name'];
        $section->course_id=$request['course_id'];
        $section->teacher_id=$request['teacher_id'];
        $section->show=$request['show'];
        $section->save();
        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section=Section::findOrFail($id);
        $teachers=Teacher::all();
        return view('admin_system.sections.edit',compact('section','teachers'));
    }

    
    public function update(Request $request, $id)
    {
        $section=Section::findOrFail($id);
        $section->name=$request['name'];
        $section->course_id=$request['course_id'];
        $section->teacher_id=$request['teacher_id'];
        $section->show=$request['show'];
        $section->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section=Section::findOrFail($id);
        $section->delete();
        return redirect()->back();
    }
}
