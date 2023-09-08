<?php

namespace App\Http\Controllers;
use App\Models\Research;
use Illuminate\Http\Request;

class AddResearch extends Controller
{
    public function addresearch(){
        return view('addresearch');
    }
    public function submit(Request $request){
       $research=new Research;
       $research->research_topic=$request['research_topic'];
      $research->subtitle1=$request['subtitle1'];
      $research->description1=$request['description1'];
      $research->subtitle2=$request['subtitle2'];
      $research->description2=$request['description2'];
      $research->subtitle3=$request['subtitle3'];
      $research->description3=$request['description3'];
      $research->subtitle4=$request['subtitle4'];
      $research->description4=$request['description4'];
      $research->subtitle5=$request['subtitle5'];
      $research->description5=$request['description5'];
      $research->subtitle5=$request['subtitle5'];
      $research->description5=$request['description5'];
      $research->subtitle6=$request['subtitle6'];
      $research->description6=$request['description6'];
      $research->subtitle7=$request['subtitle7'];
      $research->description7=$request['description7'];
      $research->subtitle8=$request['subtitle8'];
      $research->description8=$request['description8'];
       $research->save();
       return redirect('addresearch');
    }
    public function viewresearch(){
        $data=Research::all();
        return view("viewresearch",compact("data"));
     }

       public function displayresearch(){
        $research=Research::all();
        return view('research',compact("research"));
    }
}
