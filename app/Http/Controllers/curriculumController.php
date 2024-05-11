<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Curriculum;
use Illuminate\Database\QueryException;


class curriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = Curriculum::all();
        return view("project.curriculum.curriculums", compact("curriculums"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("project.curriculum.create_curriculum");
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
    'description'=> 'required|min:10|unique:curricula,description',
]);
if($validator->fails()){
    return redirect()->back()->withErrors($validator)->withInput();
}
$request->session()->flash("success","Student added successfully you can add other student");

        $curriculums=new Curriculum();
        $curriculums->description = $request->description;
        $curriculums->save();
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
        $curriculum = Curriculum::find($id);
        return view("project.curriculum.update_curriculum", compact("curriculum"));
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
            'description'=> 'required|min:10|unique:curricula,description',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $curriculum = Curriculum::find($id);
       
        $curriculum->description = $request->description;
        $curriculum->save();
       
        return redirect('curriculum')->with('success','record updated');
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
            $curriculum=Curriculum::find($id); 
    
            $curriculum->delete();
           
            return redirect()->back()->with('success','curriculum deleted successfully');
           }
           catch(QueryException $e){
            if($e->errorInfo[1]== 1451){
                return redirect()->back()->with('success','cannot delete record due to related data');
           }
        }
    }
}
