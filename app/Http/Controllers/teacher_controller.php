<?php

namespace App\Http\Controllers;

use App\Models\Commettee;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Support\Facades\Validator;
class teacher_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers= Teacher::all();
        return view('project.teacher.teachers',compact("teachers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('project.teacher.create_teacher',compact("departments"));
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
            "name"=> "required|string",
            "SSN"=>["required","numeric","unique:teachers,SSN"],
            "degree"=>["required","string"],
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $request->session()->flash("success","teacher added successfully");

        $teachers=new teacher();

     
        $teachers->name=$request->name;
        $teachers->SSN=$request->SSN;
        $teachers->email=$request->email;
        $teachers->degree=$request->degree;
       
        $teachers->gender=$request->gender;
       
        $teachers->about=$request->about;
        $teachers->department_id=$request->department_id;

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("teachers/", $name);
            $teachers->image = $name;
        }

        $teachers->save();
        return redirect()->back();
      
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
        $teachers= Teacher::find($id);
        $departments=Department::all();
        return view("project.teacher.update_teacher",compact('teachers','departments'));
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
        $teachers= Teacher::find($id);
        $teachers->name=$request->name;
        $teachers->SSN=$request->SSN;
        $teachers->email=$request->email;
        $teachers->degree=$request->degree;
     
        $teachers->gender=$request->gender;
       
        $teachers->about=$request->about;
        $teachers->department_id=$request->department_id;

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("teachers/", $name);
            $teachers->image = $name;
        }

        $teachers->save();
        return redirect('teacher');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers=Teacher::find($id);
        $teachers->delete();
        return redirect()->back();
    }
    public function teacher_committee(){
        $Teachers=Commettee::all();
        // return $Teachers;
        return view('project.teacher@commettee',compact('Teachers'));
    }
}
