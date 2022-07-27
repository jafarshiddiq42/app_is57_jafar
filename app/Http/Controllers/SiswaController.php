<?php

namespace App\Http\Controllers;

use App\Models\Dftrulang;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Formulir()
    {
        $siswa = Siswa::find(Auth::user()->id_santri);

        return view('page.user.form', compact('siswa'));
    }

    public function Kartu()
    {
        $siswa = Siswa::find(Auth::user()->id_santri);
        return view('page.user.kartu', compact('siswa'));
    }
    public function Pengumuman()
    {
        return view('page.user.Pengumuman');
    }


    
    public function formulirsubmit(Request $request)
    {

        $siswa = Siswa::find(Auth::user()->id_santri);

        $siswa->NamaLengkap = $request->NamaLengkap;
        $siswa->Instansi =  $request->instansi;
        $siswa->JKelamin =  $request->JK;
        $siswa->NISN =  $request->nisn;

        $extnisn = $request->fotonisn->getClientOriginalExtension();
        $namaFilenisn = str_pad(Auth::user()->id_santri, 3, 0, STR_PAD_LEFT) . 'SBNISN' . '.' . $extnisn;
        $simpan = $request->fotonisn->move('image', $namaFilenisn);
        $siswa->fotoNisn = $namaFilenisn;

        $extpasf = $request->pasfoto->getClientOriginalExtension();
        $namaFilePF = str_pad(Auth::user()->id_santri, 3, 0, STR_PAD_LEFT) . 'SBPFT' . '.' . $extpasf;
        $simpan = $request->pasfoto->move('image', $namaFilePF);
        $siswa->PasFoto = $namaFilePF;


        $siswa->SekolahAsal =  $request->sekolahasal;
        $siswa->TptLahir =  $request->tmptlahir;
        $siswa->TglLahir = $request->tgllahir;
        $siswa->Hobi = $request->hobi;
        $siswa->Cita_cita = $request->citacita;
        $siswa->Kewarganegaraan = $request->warganegara;

        $siswa->NamaAyah = $request->ayahnama;
        $siswa->HpAyah = $request->ayahhp;
        $siswa->PenghasilanAyah = $request->ayahpenghasilan;
        $siswa->PendidikanAyah = $request->ayahpendidikan;
        $siswa->PekerjaanAyah = $request->ayahpekerjaan;

        $siswa->NamaIbu = $request->ibunama;
        $siswa->HpIbu = $request->ibuhp;
        $siswa->PenghasilanIbu = $request->ibupenghasilan;
        $siswa->PendidikanIbu = $request->ibupendidikan;
        $siswa->PekerjaanIbu = $request->ibupekerjaan;

        $siswa->StatusAnak = $request->statusanak;
        $siswa->AlamatOrtu = $request->alamat;
        $siswa->MenetapDengan = $request->menetap;
        $siswa->Goldar = $request->goldar;
        $siswa->TB = $request->tb;
        $siswa->BB = $request->bb;
        $siswa->Alergi = $request->alergi;
        $siswa->RiwayatSakit = $request->riwayatsehat;

        $siswa->NamaWali = $request->walinama;
        $siswa->HubunganWali = $request->walihub;
        $siswa->PekerjaanWali = $request->walikerja;
        $siswa->HpWali = $request->walihp;
        $siswa->confirmed = $request->checkme;
        // $siswa->tahunajar= $request->;
        $siswa->save();

        return redirect('/kartu');
        // dd($request->fotonisn->getClientOriginalExtension());



    }
    public function dumptest(Request $request)
    {
        $siswa = Siswa::find(Auth::user()->id_santri);
        return view('page.user.dump', compact('siswa'));
        // dd($siswa);

    }
}
