<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Teacher;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Validator;
class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        // $t=$books->teacher->name;
        // return $t;
        // return $books;
        return view("project.book.books", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers= Semester::all();
        $curriculums= Curriculum::all();
        return view('project.book.create_book',compact('teachers','curriculums'));
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
    'name'=> 'required|unique:books,name',
    'author'=> 'required|min:3',
    'publisher'=> 'required|min:3',
    'no_credits'=> 'required|min:1',
]);
if($validator->fails()){
    return redirect()->back()->withErrors($validator)->withInput();
}
$request->session()->flash("success","book added successfully you can add other");


        $books=new Book();
        
        $books->name=$request->name;
        $books->auther=$request->author;
        $books->publisher=$request->publisher;
        $books->semester_id=$request->teacher_id;
        $books->curriculum_id=$request->curriculum_id;
        $books->no_credits=$request->no_credits;
        $books->save();
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
        $curriculums= Curriculum::all();
        $teachers= Semester::all();
        $books=Book::find($id);
        return view('project.book.update_book', compact('books','teachers','curriculums'));
        
        //
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
            'name'=> 'required|unique:books,name',
            'author'=> 'required|min:3',
            'publisher'=> 'required|min:3',
            'no_credits'=> 'required|min:1',
        ]);
        
         $books =Book::find($id);      
        $books->name=$request->name;
        $books->auther=$request->author;
        $books->publisher=$request->publisher;
        $books->semester_id=$request->teacher;
        $books->curriculum_id=$request->curriculum;
        $books->no_credits=$request->no_credits;
        $books->save();
        return redirect('book')->with('success','book updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books=Book::find($id);
        $books->delete();
        return redirect()->back()->with('success','book deleted successfully');
    }
}
