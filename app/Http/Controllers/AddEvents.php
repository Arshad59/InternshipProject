<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;

class AddEvents extends Controller
{
    public function addevents(){
        return view('addevents');
     }
     public function submit(Request $request){
        $events=new Events;
       $events->event_topic=$request['event_title'];
       $events->event_description=$request['event_description'];
       $events->event_date=$request['event_date'];
       $events->event_venue=$request['event_venue'];
       if($request->hasfile('eventphoto')){
        $file=$request->file('eventphoto');
        $extension=$file->getClientOriginalExtension();
        $filename=time().".".$extension;
        $file->storeAs('public/',$filename);
        $events->photo=$filename;
      }
       $events->save();
       return redirect('addevents');
     }
     public function viewevent(){
        $data=Events::all();
        return view("viewevents",compact("data"));
     }

     public function display(){
        $event=Events::all();
        $events=$event->sortByDesc('created_at');
        return view("event",compact("events"));
}
}
