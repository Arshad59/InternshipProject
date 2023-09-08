<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Members;
use App\Models\Research;
use App\Models\Photos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/home');
        }
    }
    public function count(){
        $evecount=Events::count();
        $rescount=Research::count();
        $memcount=Members::count();
        $photocount=Photos::count();
        return view('dashboard',compact('evecount','rescount','memcount','photocount'));
    }
}
