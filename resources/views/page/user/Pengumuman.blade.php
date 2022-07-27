@extends('layouts.masteruser')
@section('SL','active')
    

@section('headercontent')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Halaman Pengumuman</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Pengumuman</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->

@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-body ">

          @if (Auth::user()->lewats->id == '2')
          <div class="alert alert-success alert-dismissible">
            {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
            <h5><i class="icon fas fa-check"></i> Selamat!</h5>
            Anda Lulus Seleksi 
          </div>  
          @elseif(Auth::user()->lewats->id == '3')
          <div class="alert alert-danger alert-dismissible">
            {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
            <h5><i class="icon fas fa-times"></i> Maaf.</h5>
            Anda tidak Lulus Seleksi 
          </div>
          @else
          <div class="alert alert-warning alert-dismissible">
            {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
            <h5><i class="icon fas fa-times"></i> Notif.</h5>
            Belum Ditentukan
          </div>
          @endif
          
         
          <a href="/DaftarUlang" class="btn btn-primary"> lanjutkan pendaftaran</a>
          <a href="/DaftarUlang" class="btn btn-primary"> Lihat Pengumuman Keseluruhan</a>
        </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
@endsection