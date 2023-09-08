<?php
namespace App\Models;
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function check(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        $user=User::where('name',"=",$request->name)->first();
        if($user){
if(User::where('password',"=",$request->password)->first()){

            return redirect('/dashboard');
            return back()->with('success','suceesfully logged in');
         }else{
            return back()->with('fail','Invalid password');
         }
        }else{
            return back()->with('fail','Invalid Username');
        }
    }
}
