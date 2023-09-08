<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $a=array('adminlogin','addmember','addevents','addresearch','deletemembers','addphotos');
        foreach($a as $arr){
        if(!session()->has('LoggedUser')&&($request->path()!=$arr)){
            return redirect('/admin/login')->with('fail','Please login...');
        }
        if(session()->has('LoggedUser')&&($request->path())==$arr){
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
        ->header('Pragma','no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT ');
    }
    }
}
