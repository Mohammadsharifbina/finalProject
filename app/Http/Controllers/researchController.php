<?php

namespace App\Http\Controllers;

use App\Models\Research;
use App\Models\Teacher;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class researchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researches=Research::all();
        return view("project.research.researches",compact("researches"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers=Teacher::all();
        $departments=Department::all();
        return view("project.research.create_research",compact("teachers","departments"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $validator=Validator::make($request->all(),[
        //     'issue'=> 'required',
        //     'team'=> 'required',
        //     'date'=> 'required',
        //     'file'=> 'required|file|mimes:pdf,docx',
           
        // ]);
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        
        // $request->session()->flash("success","research added successfully you can add other ");
        
        
        $researches=new Research();
        $researches->title=$request->title;
        $researches->content=$request->content;
        $researches->published_date=$request->date;
        $researches->assetType=$request->assetType;
        $researches->teacher_id=$request->teacher_id;


        if($request->hasfile("file")){
            $file = $request->file("file");
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("researches/", $name);
            $researches->file = $name;
        }
        $researches->save();
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
        $teachers=Teacher::all();
        $departments=Department::all();
        $researches=Research::find($id);
        return view("project.research.update_research",compact("teachers","departments",'researches'));
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
        $validator = Validator::make($request->all(), [
            'issue'=>'required|min:3',
            'team'=>'required|min:3',
            'date'=>'required|date|before_or_equal:today',
            'file'=>'required'

        ]);
        $request->session()->flash("success","research update successfully");
       
    // return $request;
  
      

        $researches=Research::find($id);
        $researches->issue=$request->issue;

        $researches->team=$request->team;
        $researches->date=$request->date;
        $researches->department_id=$request->department_id;
        $researches->teacher_id=$request->teacher_id;
        
        if($request->hasfile("file")){
            $file = $request->file("file");
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("researches/", $name);
            $researches->file = $name;
        }
        $researches->save();
        return redirect('research');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $researches=Research::find($id);
        $researches->delete();
        return redirect()->back()->with('success','Research deleted successfully');
    }
}
