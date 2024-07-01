<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Book;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Semester;
use App\Notifications\sendNotifaction;
use Notification;
use App\Models\User;

use Validator;
class marksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $students=Student::find($id);
        // return $students;
        $semesters=Semester::all();
        $books=Book::all();
        return view("addmark",compact("books","students","semesters"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student=Student::where('id',$request->student)->first();
        $user=User::where('email',$student->email)->first();
        $validator=Validator::make($request->all(), [
            "marks"=> "required|numeric|max:100|min:0",
           
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
        
        $marks=new Mark();
        $book=Book::where('id',$request->book)->first();

        

        $marks->marks= $request->marks;
        $marks->student_id=$request->student;
        $marks->semester_id=$book->semester_id;
        $marks->book_id=$request->book;
        $marks->total=$request->marks*$book->No_credits;
        $marks->save();
        
        $request->session()->flash("success","Marks added successfully you can add other student");
        $details=[
            'greeting'=>"hi {{$student->name}}",
            'body'=>"the marks of   {{$book->name}} ware announced  ",
            'actiontext'=>"check your marks",
            'actionurl'=>'http://127.0.0.1:8000/registered/{{$student->id}}',
            'lastline'=>"thank you",
        ];
        Notification::send($user,new sendNotifaction($details));
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
        $marks=Mark::find($id);
        $students=Student::where('id',$marks->student_id)->first();
        $books=Book::where('id',$marks->book_id)->first();
        
        return view('project.student.updateStudentMarks',compact('marks','students','books'));
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
        $marks=Mark::find($id);
        $book=Book::where('id',$request->book)->first();
        $marks->marks= $request->marks;
        $marks->student_id=$request->student;
        $marks->semester_id=$book->semester_id;
        $marks->book_id=$request->book;
        $marks->total=$request->marks*$book->No_credits;
        $marks->save();
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
        $marks=Mark::find($id);
        $marks->delete();
        return redirect()->back();
    }
}
