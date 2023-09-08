<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Photos;
use Illuminate\Support\File;
class AddPhotos extends Controller
{
    public function index(){
        return view('addphotos');
        }
        public function upload(Request $request){
            $pic=new Photos;
            $request->validate([
                'photo'=>'required'
            ]);
            if($request->hasfile('photo')){
                $file=$request->file('photo');
                $extension=$file->getClientOriginalExtension();
                $filename=time().".".$extension;
                $file->storeAs('public/gallery/',$filename);
                $pic->photos=$filename;
              }
            $pic->save();
            return redirect('addphotos');
         }
         public function viewphotos(){
            $photos=Photos::all();
            return view('viewphotos',compact("photos"));
         }


         public function display(){
            $data=Photos::all();
            return view("event",compact("data"));
    }
}
