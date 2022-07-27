@extends('layouts.masteruser')
@section('SB','active')
    

@section('headercontent')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kartu Peserta</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Kartu</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->

@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h2>User</h2>
            <a href="/dump" target="_blank" class="btn btn-primary"  >cetak kartu</a>
        </div>
        <div class="">
          {{-- print --}}
          
        </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
@endsection