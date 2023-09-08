<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('adminlogin');
    }
    public function login(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);

         $user=Admin::where('email',"=",$request->email)->first();
         if($user){
            if(Admin::where('password',"=",$request->password)->first()){
                $request->session()->put('LoggedUser',$user->id);
                return redirect('/dashboard');
                return back()->with('success','successfully logged in');
            }else{

                return back()->with('fail','Invalid password');

             }
         }else{
            return back()->with('fail','Invalid username');
         }
    }
}
