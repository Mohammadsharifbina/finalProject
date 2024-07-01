<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Notification;
use App\Notifications\sendNotifaction;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::take(10)->get();
        return view("project.contact.contacts",compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("project.layout.contact");
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
            'w3lMessage'=>'required|string',
            'w3lSubject'=>'required|string',
            'Name'=>'required|string',
            
        ]);
        $user=User::where('email',$request->Sender)->first();
        $contact=new Contact();
        $contact->comment=$request->w3lMessage;
    
        $contact->subject= $request->w3lSubject;
        $contact->user_id=$user->id;
        $contact->save();
        $user=User::where('email','sharif.bina2021@gmail.com')->first();
        $details=[
            'greeting'=>"hi",
            'body'=>"some one has message",
            'actiontext'=>"wiev that",
            'actionurl'=>'http://127.0.0.1:8000/contact',
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
