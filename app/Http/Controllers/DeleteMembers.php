<?php

namespace App\Http\Controllers;
use App\Models\Members;
use Illuminate\Http\Request;

class DeleteMembers extends Controller
{

    public function view(){
      $members=Members::all();
      $data=compact('members');
      return view('viewmembers')->with($data);
    }
    public function delete($id){
       $member=Members::find($id);
       if(!is_null($member)){
        $member->delete();
       }
       return redirect('/viewmember');
    }
    public function edit($id){
      $members=Members::find($id);
      if(!is_null($members)){
        $title="Update Member";
        $url= url('/update') ."/". $id;
        $data=compact('members','url','title');
        return view('update')->with($data);
      }
   }

   public function update($id, Request $request){
    $members=Members::find($id);
    $members->name=$request['Name'];
    $members->email=$request['email'];
    $members->affiliation=$request['affiliation'];
    $members->position=$request['position'];
   if($request->hasfile('photo')){
     $file=$request->file('photo');
     $extension=$file->getClientOriginalExtension();
     $filename=time().".".$extension;
     $file->storeAs('public/',$filename);
     $members->photo=$filename;
   }
   $members->save();
   return redirect('deletemember');
}
}
