<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\Cllass;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class classController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes =Cllass::all();
        return view("project.class.classes", compact("classes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view("project.class.createClass",compact("departments"));
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
            'name' => 'required|min:3|string',
            'no_term'=> 'required',
            
          

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","term added successfully you can add other student");

        $class = new Cllass();
        $class->name = $request->name;
        $class->no_term= $request->no_term;
        $class->department_id = $request->department;
        $class->save(); 
        return redirect()->back()->with("success","class added successfull");
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
        $class = Cllass::find($id);
        $departments=Department::all();
        return view("project.class.updateClass", compact("class",'departments'));
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
        $validator=Validator::make($request->all(), [
            'name' => 'required|min:3|string',
            'no_term'=> 'required',
            
          

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $class = Cllass::find($id);
        $class->name = $request->name;
        $class->no_term= $request->no_term;
        $class->department_id = $request->department;
        $class->save(); 
        return redirect('class')->with('success','class updated successfull');

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
            $Cllass=Cllass::find($id); 
    
            $Cllass->delete();
           
            return redirect()->back()->with('success','class deleted successfully');
           }
           catch(QueryException $e){
            if($e->errorInfo[1]== 1451){
                return redirect()->back()->with('success','cannot delete record becuease this record is related to others');
           }
        
        
        }
    }
    public function SIC($id)
    {
        $classes = Cllass::find($id);
        return view('project.class.studentsInclass', compact('classes'));
    }
}
