<?php

namespace App\Http\Middleware;

// use Illuminate\Support\Facades\DB;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkpin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $pin = DB::table('users')->select('checkpin')->where('id','=',Auth::user()->id )->get();
        if (Auth::user()->checkpin ==1) {
            return $next($request);
        }else{
            return redirect('/pin');
        }

      
       
    }
}
