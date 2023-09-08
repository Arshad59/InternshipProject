<?php

namespace App\Http\Controllers;
use App\Models\Members;
use Illuminate\Http\Request;

class AddMembers extends Controller
{
    public function addmember(){
    return view('addmember');
    }
    public function submit(Request $request){
       $memb=new Members;
       $request->validate([
        'Name'=>'required',
        'email'=>'required',
        'affiliation'=>'required',
        'designation'=>'required',
        'position'=>'required',
        'committee'=>'required',
        'photo'=>'required'
    ]);
       $memb->name=$request['Name'];
       $memb->email=$request['email'];
       $memb->affiliation=$request['affiliation'];
       $memb->designation=$request['designation'];
       $memb->position=$request['position'];

       if($request->committee=='advisory'){
        $memb->committee='advisory';
       }
       else if($request->committee=='managing'){
        $memb->committee='managing';
       }
       else if($request->committee=='scientific'){
         $memb->committee='scientific';
       }
       else if($request->committee=='all'){
        $memb->committe='all';
       }

      if($request->hasfile('photo')){
        $file=$request->file('photo');
        $extension=$file->getClientOriginalExtension();
        $filename=time().".".$extension;
        $file->storeAs('public/',$filename);
        $memb->photo=$filename;
      }

       $memb->save();
       return redirect('addmember');
    }
    public function displaymember(){
        $member=Members::all();
        return view('about',compact("member"));
    }
}
