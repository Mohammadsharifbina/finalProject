<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use Validator;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view("project.employee.employees", compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('project.employee.create_employee',compact('departments'));
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
            'name'=> 'required|unique:semesters,name',
            'email'=> 'unique:employees,email',
            'age'=>'numeric:18',
            'job'=> 'required|min:3',
            'gender'=> 'min:3',
            'address'=> 'required',
            'str_date'=> 'required|date:before_or_equal,today',
            'image'=> 'required|mimes:png',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","Student added successfully you can add other student");
        $employees=new Employee();
        
        $employees->name=$request->name;
        $employees->email=$request->email;
        $employees->age=$request->age;
        $employees->job=$request->job;
        $employees->gender=$request->gender;
        $employees->address=$request->address;
        $employees->str_date=$request->str_date;
        $employees->department_id=$request->department;

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("employees/", $name);
            $employees->image = $name;
        }
        $employees->save();
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
        //
        $departments=Department::all();
        $employee=Employee::find($id);
        return view('project.employee.update_employee',compact('employee','departments'));
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
            'name'=> 'required',
            'email'=> 'email',
            'age'=>'numeric:18',
            'job'=> 'required|min:3',
            'gender'=> 'min:3',
            'address'=> 'required',
            'str_date'=> 'required|date:before_or_equal,today',
            'image'=> 'mimes:png',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $employees=Employee::find($id);
    
        $employees->name=$request->name;
        $employees->email=$request->email;
        $employees->age=$request->age;
        $employees->job=$request->job;
        $employees->gender=$request->gender;
        $employees->address=$request->address;
        $employees->str_date=$request->str_date;
        $employees->department_id=$request->department;

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("employees/", $name);
            $employees->image = $name;
        }
        $employees->save();
        return redirect('employee')->with('success','employee data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees=Employee::find($id);
        $employees->delete();
        return redirect()->back()->with('success','record deleted successfully');
    }
}
