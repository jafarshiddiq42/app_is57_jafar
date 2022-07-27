<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lewat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminhome()
    {
        $nauser = User::where('id', '>', 1)->get();
        return view('page.admin.homeadmin', compact('nauser'));

        // if (substr($nauser[1]->phone,0,1)==0) {
        //     $nauser[1]->phone = '+62'.substr(trim($nauser[1]->phone),1);
        //     dd($nauser[1]->phone);
        // }
        
    }
    public function adminsantribaru()
    {
        // $siswa = DB::table('users')->join('siswas', 'users.id_santri', '=', 'siswas.id')
        //     ->select('users.*', 'siswas.*')->where('NamaLengkap','is not','null')->get();
        $siswa = Siswa::whereNotNull('Instansi')->get();
        // $siswa = Siswa::all();
        return view('page.admin.SantriAdmin', compact('siswa',));
        // dd($siswa);
    }
    public function adminstatuslulus()
    {
        $lulus = Lewat::all();
        $nauser = DB::table('users')
        // ->join('dftrulangs','users.id_berkas','=','dftrulangs.id')
        ->join('siswas','users.id_santri','=','siswas.id')
        ->select('users.*','siswas.NamaLengkap')
        ->where('users.id','>',1)
        ->where('siswas.NamaLengkap','!=','')
        ->get();;
        return view('page.admin.statuslulusadmin', compact('nauser','lulus'));
        // dd($nauser);
    }
   
    public function updatelulus(Request $request, $id)
    {
        $nopen = User::find($id);
        // $nauser = DB::table('siswas')
        // // ->join('dftrulangs','users.id_berkas','=','dftrulangs.id')
        // ->join('users','users.id_santri','=','siswas.id')
        // ->select('users.*')
        // ->where('users.id','>',1)
        // ->where('users.id_santri','=',$id)
        // ->first()
        ;
        $nopen->id_lewat = $request->luluss;
        $nopen->save();
        // ->where('users.id_lewat','=',2)
        // dd($id);

        return redirect('/admin/statuslulus');
    }
}
