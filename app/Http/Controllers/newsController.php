<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Validator;
use App\Notifications\AdminNotification;
use Notification;
use App\Models\User;
class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        
        $news=News::all();
        return view("project.news.news",compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view("project.news.create_news",compact("departments"));
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
        $user=User::all();
        $validator=Validator::make($request->all(),[
            'issue'=> 'required|unique:news,issue',
            'description'=> 'required|min:10',
            'date'=> 'date:before_or_equal,today',
            'time'=> 'required',
            'image'=> 'nullable',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","news added successfully you can add other");
        $news=new News();
        $news->issue=$request->issue;
        $news->Description=$request->description;
        $news->date=$request->date;
        $news->time=$request->time;
        $news->department_id=$request->department;
        $time=Carbon::now()->subHour();
      
        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("news/", $name);
            $news->image = $name;
        }
        $news->save();
        $message=[
            'greeting'=>"hi ",
            'body'=>"new news",
            'actiontext'=>"view",
            'actionurl'=>'http://127.0.0.1:8000/',
            'lastline'=>"thank you",
        ];
        Notification::send($user,new AdminNotification($message));
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
        $new=News::find($id);
        return view('project.news.newDetails',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments=Department::all();
        $news=News::find($id);
        return view("project.news.update_news",compact("departments","news"));
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
            'issue'=> 'required',
            'description'=> 'required|min:10',
            'date'=> 'date:before_or_equal,today',
            'time'=> 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $news=News::find($id);
        $news->issue=$request->issue;
        $news->Description=$request->description;
        $news->date=$request->date;
        $news->time=$request->time;
        $news->department_id=$request->department;
        if($request->hasfile("image")){
            $file = $request->file("image");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("news/", $name);
            $news->image = $name;
        }
        $news->save();
        return redirect('NW')->with('success','new updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::find($id);
        $news->delete();
        return redirect()->back()->with('success','record deleted successfully');
    }
}
