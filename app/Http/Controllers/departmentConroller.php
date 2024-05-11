<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Student;

class departmentConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=Department::all();
        return view("project.department.departments",compact("departments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("project.department.create_department");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restrictions=[
            'name'=>'required|min:3|unique:departments,name',
            'code'=>'required|min:3|unique:departments,code',
            'email'=>'required|email|min:3|unique:departments,email',
            'STR_date'=>'required|date|before_or_equal:today'
        ];
        $validateData=$request->validate($restrictions);
        $request->session()->flash("success","department added successfully");

        $departments=new Department();
        $departments->name=$request->name;
        $departments->code=$request->code;
        $departments->email=$request->email;
        $departments->STR_date=$request->STR_date;
        $departments->save();
        $request->session()->flash("success","Department added successfully");
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
        $departments=Department::find($id);
        return view('project.department.update_departments',compact('departments'));
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
        $restrictions=[
            'name'=>'required|min:3',
            'code'=>'required|min:3',
            'email'=>'required|email|min:3|email',
            'STR_date'=>'required|date|before_or_equal:today'
        ];
        $validateData=$request->validate($restrictions);
        $request->session()->flash("success","department updated successfully");
        $departments=Department::find($id);
        $departments->name=$request->name;
        $departments->code=$request->code;
        $departments->email=$request->email;
        $departments->STR_date=$request->STR_date;
        $departments->save();
        

        return redirect('department');
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
        $departments=Department::find($id); 

        $departments->delete();
       
        return redirect()->back()->with('success','department deleted successfully');
       }
       catch(QueryException $e){
        if($e->errorInfo[1]== 1451){
            return redirect()->back()->with('error','cannot delete record due to related data');
       }
    }

    }
    public function S_in_D($id){
        $departments=Department::find($id);
        // return $departments;
        return view('project.department.studentsIndepartment',compact('departments'));
    }

    public function general(){
        $departments=Department::all()->count();
        $teachers=Teacher::all()->count();
        $employees=Employee::all()->count();
        $students=Student::all()->count();
        // return $students;
        $s=Student::latest()->take(4)->get();
        // return $s;
        return view('project.dashboard.dashboard',compact('departments','teachers','students','s','employees'));
        
    }
}