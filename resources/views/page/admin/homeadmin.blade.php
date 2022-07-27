@extends('layouts.masteradmin')
@section('PA','active')
    

@section('headercontent')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Anda Login Sebagai Admin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Pin Akun</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->

@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    
    {{-- table --}}
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tetapkan pin akun </h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" >
            <table class="table table-hover table-head-fixed text-nowrap">
              <thead>
                <tr class="text-center">
                  <th class="text-left">Nama</th>
                  <th   >NomorPendaftaran</th>
                  <th class="text-left">No.WA</th>
                  <th>PIN</th>
                  <th>Action</th>
                  {{-- <th>PIN</th>
                  <th>Simpan</th>
                  <th>Reset Password</th> --}}
                </tr>
              </thead>
              <tbody>
                @forelse ($nauser as $item)
                <tr class="text-center">
                  <td class="text-left">{{ Str::ucfirst($item->name) }}</td>
                  <td>{{ 'SB-'.str_pad($item->siswas->id,3,0,STR_PAD_LEFT) }}</td>
                  <td class="text-left">{{ $item->phone }}</td>
                  <td>{{ $item->pin }}</td>
                  <td>
                    <a 
                    target="_blank"
                    href="https://api.whatsapp.com/send?phone=@if (substr($item->phone,0,1)==0) 
                     {{ $item->phone = '+62'.substr(trim($item->phone),1); }} 
                     @else
                     {{ $item->phone }}
                    @endif
                    &text=PIN Akun Pendaftaran Santri Baru Anda adalah {{ $item->pin }}
                    " class="btn btn-primary">kirim</a>
                  </td>
                  {{-- <td>{{ $item->name }}</td>
                  <td>{{ $item->name }}</td> --}}
                  </tr> 
                @empty
                <tr>
                  <td colspan="2" class="text-center">belum ada data</td>
                </tr>
                @endforelse

                
                
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
  
@endsection