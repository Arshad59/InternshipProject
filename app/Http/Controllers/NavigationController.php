<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App\Models\Events;
use App\Models\Research;
use App\Models\Members;
class NavigationController extends Controller
{
    public function home(){
        $mcount=Members::count();
        $evecount=Events::count();
        return view('home',compact("mcount","evecount"));
    }
    public function about(){
        return view('about');
    }
    public function research(){
        return view('research');
    }
    public function contact(){
        return view('contact');
    }
    public function event(){
        return view('event');
    }
    public function admin(){
        return view('adminlogin');
    }
    public function displayphoto(){
        $data=Photos::all();
        $event=Events::all();
        $events=$event->sortByDesc('event_date');
        return view("event",compact("data","events"));
    }
    public function displayresearch(){
        $research=Research::all();
        return view('research',compact("research"));
    }
    public function displaymember(){
        $member= Members::all();
        return view('about',compact("member"));
    }

}
