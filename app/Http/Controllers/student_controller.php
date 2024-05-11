<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Cllass;
use Illuminate\Support\Facades\Validator;

class student_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $student = new Student();
        $tablename=$student->getTable();
        // return $tablename;
        return view("project.student.students", compact("students","tablename"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters= Semester::all();
        $classes= Cllass::all();
        $departments=Department::all();
        return view("project.student.create_student",compact('semesters','classes','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validitor=Validator::make($request->all(), [
            'name' => 'required|min:3',
            'Father' => 'required|min:3',
            'age' => 'required|numeric|min:18',
            'image' => 'required',
            'str_date' => 'required|date|before_or_equal:today',
            'cllass_id'=> 'required',
            'email' => 'required|email|min:3'

        ]);
        if($validitor->fails()){
            return redirect()->back()->withErrors($validitor)->withInput();
        }
        
        $students=new Student();
        $students->name=$request->name;
        $students->Father=$request->Father;
        $students->email=$request->email;
        $students->age=$request->age;
        $students->str_date=$request->str_date;
        $students->gender=$request->gender;
        $students->department_id=$request->department_id;
        $students->cllass_id=$request->cllass_id;
        $students->semester_id=$request->semester_id;

        $request->session()->flash("success","Student added successfully you can add other student");
     

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("students/", $name);
            $students->image = $name;
        }

        $students->save();
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
        $students=Student::find($id);
        return view('project.student.studentIDcard',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        // return $students;
        $semesters= Semester::all();
        $classes= Cllass::all();
        $departments=Department::all();
         return view("project.student.update_student", compact("students","semesters","classes","departments"));
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
        $validateor = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'Father' => 'required|min:3',
            'age' => 'required|numeric|min:18',
            
            'str_date' => 'required|before_or_equal:today',

            'email' => 'required|email',
            'semester_id' => 'required'

        ]);
       
        
        $students = Student::find($id);
        $students->name=$request->name;
        $students->email=$request->email;
        $students->age=$request->age;
        $students->str_date=$request->str_date;
        $students->gender=$request->gender;
        $students->department_id=$request->department_id;
        $students->cllass_id=$request->cllass_id;
        $students->semester_id=$request->semester_id;

     
        $request->session()->flash("success","Student update successfully");

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("students/", $name);
            $students->image = $name;
        }

        $students->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect()->back()->with('success','student deleted successfully');
    }
    public function studentAndteachers(){
        $students=Student::all();
        $teachers=Teacher::all();
        return view('studentAndteachers',compact('students','teachers'));
    }
    public function studentMarks(){
        $departments=Department::all();
        return view('project.student.studentMarks',compact('departments'));
    }
}
