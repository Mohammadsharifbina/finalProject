<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Semester;
use App\Models\Curriculum;
use App\Models\Cllass;
use Illuminate\Support\Facades\Validator;

class semesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semesters=Semester::all();
        return view('project.semester.semesters',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $classes=Cllass::all();
        $curriculums=Curriculum::all();
        return view('project.semester.create_semester',compact('classes','curriculums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required|min:3',
         
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","Student added successfully you can add other");

        $semesters=new Semester();
        $semesters->name= $request->name;
        $semesters->cllass_id= $request->class;
        $semesters->curriculum_id= $request->curriculum;
        $semesters->save();
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $semester=Semester::find($id);
        // return $semester;
        $classes=Cllass::all();
        $curriculums=Curriculum::all();
        return view('project.semester.update_semester',compact('classes','curriculums','semester'));
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
        $validator=Validator::make($request->all(),[
            'name'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $semesters=Semester::find($id);
        $semesters->name= $request->name;
        $semesters->cllass_id= $request->class;
        $semesters->curriculum_id= $request->curriculum;
        $semesters->save();
        return redirect('semester')->with('success','semester updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $departments=Semester::find($id); 
    
            $departments->delete();
           
            return redirect()->back()->with('success','semester deleted successfully');
           }
           catch(QueryException $e){
            if($e->errorInfo[1]== 1451){
                return redirect()->back()->with('success','cannot delete record due to related data');
           }
        }

    
    }
}
