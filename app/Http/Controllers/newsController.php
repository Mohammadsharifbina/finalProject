<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Validator;
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
        $validator=Validator::make($request->all(),[
            'issue'=> 'required|unique:news,issue',
            'description'=> 'required|min:10',
            'date'=> 'date:before_or_equal,today',
            'time'=> 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","news added successfully you can add other");
        $news=new News();
        $news->issue=$request->issue;
        $news->Desription=$request->description;
        $news->date=$request->date;
        $news->time=$request->time;
        $news->department_id=$request->department;
        $news->save();
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
        $news->Desription=$request->description;
        $news->date=$request->date;
        $news->time=$request->time;
        $news->department_id=$request->department;
        $news->save();
        return redirect('news')->with('success','new updated successfully');
        
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
