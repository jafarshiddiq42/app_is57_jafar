<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function index()
    {
        // $user = User::find(Auth::user()->id);

        return view('auth.pin');
        // dd(Auth::user()->id);
    }
    public function checkpin(Request $request)
    {
        $pinasli =DB::table('users')->select('pin')->where('id','=',Auth::user()->id)->first();
        $pintrial = $request->pin1.$request->pin2.$request->pin3.$request->pin4.$request->pin5;

        // dd($pintrial);
        if ($pintrial == $pinasli->pin) {
          $user = User::find(Auth::user()->id);
          $user->checkpin = 1;
          $user->save(); 
         
          return redirect('/home');
        }
        else{
            return redirect('/pin');
        }
        
     
    }
    // public function tester(Request $request)
    // {
    //     $pinasli =DB::table('users')->select('pin')->where('id','=',Auth::user()->id)->first();
    //     $pin=$request->pin;
    //     dd($pinasli->pin , $pin);
    // }
}
