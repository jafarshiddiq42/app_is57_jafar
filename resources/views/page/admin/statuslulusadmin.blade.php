@extends('layouts.masteradmin')
@section('SL','active')
    

@section('headercontent')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Ini Halaman Status Kelulusan</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Status Lulus</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    
    {{-- table --}}
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Kelulusan</h3>

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
          <div class="card-body table-responsive p-0" style="height: 400px">
            <table class="table  table-hover table-head-fixed text-nowrap ">
              <thead class="">
                <tr class="text-center">
                  <th class="text-left">Nama</th>
                  {{-- <th>idakun</th> --}}
                  <th>NomorPendaftaran</th>
                  <th>StatusLulus</th>
                  {{-- <th>PIN</th>
                  <th>Simpan</th>
                  <th>Reset Password</th> --}}
                </tr>
              </thead>
              <tbody>
                @forelse ($nauser as $item)
                <tr class="text-center">
                  <td class="text-left">{{ strtoupper($item->NamaLengkap) }}</td>
                  {{-- <td>{{ $item->id }}</td> --}}
                  <td>{{ 'SB-'.str_pad($item->id_santri,3,0,STR_PAD_LEFT)  }}</td>
                  <td>
                    <form action="/admin/updatelulus/{{ $item->id }}" id="formlulus" method="post">
                      @csrf
                    <select name="luluss" id="" class="form-control" onchange="this.form.submit()">
                      @foreach ($lulus as $ket)
                      @if ($item->id_lewat == $ket->id )
                      <option selected value="{{ $ket->id }}">{{ $ket->keterangan }}</option>
                      @else
                      <option value="{{ $ket->id }}">{{ $ket->keterangan }}</option>
                      @endif
                         
                      @endforeach

                    </select>
                  </form>
                  </td>
                 {{-- @if ($item->id_lewat != 2)
                     <td>
                       <div class="bg-danger">{{ $item->lewats->keterangan }}</div>
                     </td>
                 @else
                     <td>
                       <div class="bg-success">{{ $item->lewats->keterangan }}</div>
                     </td>
                 @endif --}}
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
