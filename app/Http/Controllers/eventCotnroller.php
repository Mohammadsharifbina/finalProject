<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Notifications\AdminNotification;
use Notification;
use App\Models\User;

class eventCotnroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event=Event::all();
        return view('project.events.events',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.events.createEvenet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::all();
        $request->validate([
            'title'=>'required',
            'desc'=>'required| min:10',
            'eventImage'=>'required',
        ]);
        $event=new Event();
        $event->title=$request->title;
        $event->desc=$request->desc;
        if($request->hasfile("eventImage")){
            $file = $request->file("eventImage");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("events/", $name);
            $event->eventImage = $name;
        }
        $event->save();
        $message=[
            'greeting'=>"hello ",
            'body'=>"new event auccre",
            'actiontext'=>"See that",
            'actionurl'=>'http://127.0.0.1:8000/',
            'lastline'=>"thank you",
        ];
        Notification::send($user,new AdminNotification($message));
        return redirect()->back()->with("event created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::find($id);
        return view('project.events.eventDetails',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);
        return view('project.events.updateEvent',compact('event'));
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
        $event=Event::find($id);
        $event->title=$request->title;
        $event->desc=$request->desc;
        if($request->hasfile("eventImage")){
            $file = $request->file("eventImage");
            
            $extension = $file->getClientOriginalExtension();
            $name=time().".".$extension;
            $file=$file->move("events/", $name);
            $event->eventImage = $name;
        }
        $event->save();
        return redirect('event');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        $event->delete();
        return redirect()->back()->with('success','event deleted successfully');
    }
}
