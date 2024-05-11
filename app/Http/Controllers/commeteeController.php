<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Commettee;
use Illuminate\Support\Facades\Validator;

class commeteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commettees = Commettee::all();
        return view("project.commette.commettees", compact("commettees"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view("project.commette.create_commette",compact("departments"));
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
            'name'=> 'required|unique:commettees,name',
            'team'=> 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","committee added successfully you can add other");


        $commettees=new Commettee();
        $commettees->name=$request->name;
        $commettees->team= $request->team;
        $commettees->department_id=$request->department;
        $commettees->save();
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
        $commettees=Commettee::find($id);
        return view("project.commette.update_commettee", compact("commettees",'departments'));
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
         
            'name'=> 'required|min:3',
            'team'=> 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->session()->flash("success","committee updated successfully");
        $commettees=Commettee::find($id);
        $commettees->name=$request->name;
        $commettees->team= $request->team;
        $commettees->department_id=$request->department;
        $commettees->save();
        return redirect('commettee')->with('success','committee updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commettees=Commettee::find($id);
        $commettees->delete();
        return redirect()->back()->with('success','committee deleted successfully');
    }
}
