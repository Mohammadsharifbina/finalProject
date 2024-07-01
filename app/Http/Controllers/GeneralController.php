<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Department;
use App\Models\User;
use App\Models\News;
use App\Notifications\admin;
use App\Notifications\AdminNotification;
use App\Notifications\wellcomenotification;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;
use App\Models\Kankor_id;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Notification;
use App\Models\Book;
use App\Models\Semester;
use App\Models\Mark;
use App\Notifications\sendNotifaction;
use App\Notifications\StudentAccountregister;


use Validator;

class GeneralController extends Controller
{
    public function home(){
        $news=News::take(3)->get();
        $time=Carbon::now()->subHour();
        $comments=Comment::take(3)->get();
        $events=Event::take(3)->get();
        return view("project.layout.home",compact("news",'comments','events'));
    }
    public function teacher(){
        return view('project.layout.teacher');
    }

    public function practice(){
        $user=User::all();
        $sharif=[
            'greeting'=>"hi",
            'body'=>"some one register",
            'actiontext'=>"check that",
            'actionurl'=>'http://127.0.0.1:8000/student',
            'lastline'=>"thank you",
        ];
        Notification::send($user,new admin($sharif));
        dd('done');
    }
    public function allTeacher(){
        $teachers=Teacher::where('id','>',1)->get();
        $teacher=Teacher::find(1);
        return view('project.layout.staf',compact('teachers','teacher'));
    }
    public function teacherInfo($id){
        $teacher=Teacher::find($id);
        return view('project.layout.teacher',compact('teacher'));
    }
   
    public function checkStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Kankor_id' => 'required|exists:kankor_ids,KId',
        

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        return view('project.student.studentPorfilio');
        
    }
    public function login(Request $request){
        // return $request;

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function notify(){
        $user =User::find(1);
        $message['hi']="hay, happy birth";

        $user->notify(new wellcomenotification($message));
        dd('done');
    }
    public function SS(Request $request)
    {
        $bina=User::where('email','sharif.bina2021@gmail.com')->first();
    
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
    $details=[
        'greeting'=>"hi {{name}}",
        'body'=>"  your account created",
        'actiontext'=>"check your account",
        'actionurl'=>'http://127.0.0.1:8000/registered/{{$student->id}}',
        'lastline'=>"thank you",
    ];
    $message=[
        'greeting'=>"hi laravel developers",
        'body'=>"this is the email. body",
        'actiontext'=>"subscribe this chanel",
        'actionurl'=>'http://127.0.0.1:8000/',
        'lastline'=>"this is the last line",
    ];
    $user=User::where('email',$students->email)->first();

    Notification::send($bina,new AdminNotification($message));
    Notification::send($user,new sendNotifaction($details));
    return redirect('registered/'.$students->id);
    }

    public function signup(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        Auth::login($user);
        return redirect('redirect');
    }

    public function staff(){
        $teachers=Teacher::all();
        return view('project.layout.staf',compact('teachers'));
    }
    public function registeredStudent($id){
       

    
        $students=Student::find($id);
        
        // return $user;
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

        $eighth=semester::where('name','eighth')->first();
        $marks8=Mark::where('semester_id','=',$eighth->id)->where('student_id',$id)->get();
        $results8=Mark::where('semester_id',$eighth->id)->where('student_id',$id)->sum('total');
        $eighthSemester=round($results7/21,2);

        $firstClassPercentage=round(($results+$results2)/42,2);  
        $secondClassPercentage=round(($results3+$results4)/42,2);
        // return $secondClassPercentage;      
        // return $firstSemesterPercentage;

        // return $sum;
        return view('project.student.studentRegesterportal',compact('students','marks1','marks2','marks3','marks4','marks5','marks6','results1','secondSemester','thirdSemester','fourthSemester','fifthSemester','sixthSemester','marks7','seventhSemester','firstClassPercentage','marks8','eighthSemester'));
       
    }
    public function notification(){

        $bina=User::where('email','sharif.bina2021@gmail.com')->first();

        
        $user=User::all();
        $details=[
            'greeting'=>"hi laravel developers",
            'body'=>"this is the email. body",
            'actiontext'=>"subscribe this chanel",
            'actionurl'=>'http://127.0.0.1:8000/',
            'lastline'=>"this is the last line",
        ];
       
        Notification::send($user,new sendNotifaction($details));
        
        dd('done');
    }

    public function studentInfo($id){
        $students=Student::find($id);

        return view('project.portal.studentInfo',compact('students'));
    }
    public function studentDetails($id){
        $students=Student::find($id);
        
        return view('project.portal.studentdetails',compact('students'));
    }
    public function feedback($id){
        $students=Student::find($id);
        return view('project.portal.feedback',compact('students'));
    }
}
