<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Semester;
use App\Models\Sum;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Cllass;
use Illuminate\Support\Facades\DB;
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
        // return view('project.student.create_student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'Father'=>'required',
            'age'=>'required',
            'str_date'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'image'=>'image',
        ]);
       
        $department=Department::where('name',$request->department)->first();
        $students=new Student();
        $students->name=$request->name;
        $students->Father=$request->Father;
        $students->age=$request->age;
        $students->gender=$request->gender;

        $students->str_date=$request->str_date;
        $students->email=$request->email;
        $students->phone=$request->phone;
        $students->department_id=$department->id;

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
        return view('project.portal.card',compact('students'));
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
    public function studentMarks($id){

        $students=Student::find($id);
        $first=semester::where('name','first')->first();
        $marks1=Mark::where('semester_id',$first->id)->where('student_id',$id)->get();
        $results=Mark::where('semester_id',$first->id)->where('student_id',$id)->sum('total');
        $results1=round($results/21,2);
        
        $second=semester::where('name','second')->first();
        $marks2=Mark::where('semester_id',$second->id)->where('student_id',$id)->get();
        $results2=Mark::where('semester_id',$second->id)->where('student_id',$id)->sum('total');
        $secondSemester=round($results2/21,2);
        
        $third=semester::where('name','third')->first();
        $marks3=Mark::where('semester_id',$third->id)->where('student_id',$id)->get();
        $results3=Mark::where('semester_id',$third->id)->where('student_id',$id)->sum('total');
        $thirdSemester=round($results3/22,2);
     

        
        $fourth=semester::where('name','fourth')->first();
        $marks4=Mark::where('semester_id',$fourth->id)->where('student_id',$id)->get();
        $results4=Mark::where('semester_id',$fourth->id)->where('student_id',$id)->sum('total');
        $fourthSemester=round($results4/21,2);

        $fifth=semester::where('name','fifth')->first();
        $marks5=Mark::where('semester_id','=',$fifth->id)->where('student_id',$id)->get();
        $results5=Mark::where('semester_id',$fifth->id)->where('student_id',$id)->sum('total');
        $fifthSemester=round($results5/21,2);

        $sixth=semester::where('name','sixth')->first();
        $marks6=Mark::where('semester_id','=',$sixth->id)->where('student_id',$id)->get();
        $results6=Mark::where('semester_id',$sixth->id)->where('student_id',$id)->sum('total');
        $sixthSemester=round($results6/21,2);

        $seventh=semester::where('name','seventh')->first();
        $marks7=Mark::where('semester_id','=',$seventh->id)->where('student_id',$id)->get();
        $results7=Mark::where('semester_id',$seventh->id)->where('student_id',$id)->sum('total');
        $seventhSemester=round($results7/21,2);

        $firstClassPercentage=round(($results+$results2)/42,2);  
        $secondClassPercentage=round(($results3+$results4)/42,2);
        // return $secondClassPercentage;      
        // return $firstSemesterPercentage;

        // return $sum;
        return view('project.student.studentMarks',compact('students','marks1','marks2','marks3','marks4','marks5','marks6','results1','secondSemester','thirdSemester','fourthSemester','fifthSemester','sixthSemester','marks7','seventhSemester','firstClassPercentage'));
    }
    public function addmarks(Request $request){
        $mark=new Sum();
        // return $mark;
        $mark->marks=$request->marks;
        $mark->credits=$request->credits;
        $mark->sum=$request->credits+$request->marks;
        $mark->save();
        return redirect()->back();
    }
    public function studentSemesterChange(){
        $students=Student::all();
        $marks=Mark::whereNull('semester_id','1')->get();
        return $students;
    }
    public function createStudent(){
      
        $departments=Department::all();
        return view("project.student.create_student",compact('departments'));
    }
    public function portal(Request $request){
        
        $validator=Validator::make($request->all(), [
            "name"=> "required|string",
            "Father"=> "required|string",
            "age"=> "required",
            "gender"=> "required",
            "email"=> "string",
            "phone"=> "|string",
            'kankor_id' => 'required|exists:kankor_ids,KId',
            
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }   
        $department=Department::where('name',$request->department)->first();
    
        $students=new Student();
        $students->name=$request->name;
        $students->Father=$request->Father;
        $students->age=$request->age;
        $students->gender=$request->gender;

        $students->str_date=$request->str_date;
        $students->email=$request->email;
        $students->phone=$request->phone;
        $students->department_id=$department->id;

        

        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("students/", $name);
            $students->image = $name;
        }

        $students->save();
        return redirect('checkStudent')->with("success","Student added successfully you can add other student");
        
    }
}
