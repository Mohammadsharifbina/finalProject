<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Teacher;
use Validator;

class skillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
        return $skills;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers= Teacher::all();
        return view("project.teacher.addSkillsToTeacher", compact("teachers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            "title"=> "required|string",
            "details"=>["required"],
            
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $request->session()->flash("success","skill added successfully");
        $skills=new Skill();
        $skills->title = $request->title;
        $skills->teacher_id = $request->teacher;
        $skills->details= $request->details;
        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("skills/", $name);
            $skills->image = $name;
        }
        $skills->save();
        return redirect()->back()->with("success","skill add successfully");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
