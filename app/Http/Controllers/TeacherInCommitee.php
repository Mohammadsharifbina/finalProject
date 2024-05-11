<?php

namespace App\Http\Controllers;

use App\Models\Commettee;
use App\Models\commettee_teacher;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherInCommitee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Teachers=Teacher::all();
        // $TC=commettee_teacher::all();
        return view('project.teacher@commettee',compact('Teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $committees=Commettee::all();
        $teachers=Teacher::all();
      
       
        return view('project.teacher.add_teacher_in_committee',compact('teachers','committees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $C=Commettee::where('id',$request->committee)->first();
        $T=Teacher::where('id',$request->teacher)->first();
        if($C && $T){
            $C->teachers()->attach($T->id);
            return redirect()->back()->with('success','teacher add to committee');
        }
        else{
            return response()->json(['error'=> 'teacher not pounded'],400);
        }
        
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
    public function destroy($id1,$id2)
    {

        $t=commettee_teacher::find($id1);
        return $t;
      
    }
    public function delete($id1,$id2){
        $C=Commettee::find($id1);
        $T=Teacher::find($id2);
        if($C && $T){
            $C->teachers()->detach($T->id);
            return redirect()->back()->with('success','teacher deleted from committee');
        }
        else{
            return response()->json(['error'=> 'teacher not pounded'],400);
        }
    }
}
