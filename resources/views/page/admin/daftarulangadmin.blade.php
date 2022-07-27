@extends('layouts.masteradmin')
@section('DU','active')
@section('headerplus')
{{-- <meta http-equiv="refresh" content="10"> --}}
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection
    

@section('headercontent')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Daftar Ulang</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Daftar Ulang</li>
         
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <table class="table " >
          <thead>
            <tr class="text-center">
              <th class="text-left">Nama</th>
              <th>No pendaftaran</th>
              <th>KK</th>
              <th>KTP Ayah</th>
              <th>KTP Ibu</th>
              <th>KTP Wali</th>
              <th>Ijazah/SKHU terakhir</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($berkas as $item)
                <tr class="text-center">
                  <td class="text-left">{{strtoupper( $item->NamaLengkap) }}</td>
                  <td>{{ 'SB-'.str_pad($item->id_santri,3,0,STR_PAD_LEFT) }}</td>
                  <td>
                    <i class="fa  @if ($item->foto_kk != 'default.jpg')
                      fa-2x  text-success fa-check-square 
                      @else
                      fa-2x  text-secondary fa-square-o 
                  @endif" ></i>
                  </td>
                  {{-- ktp ayah --}}
                  <td>
                    <i class="fa  @if ($item->ktp_ayah != 'default.jpg')
                      fa-2x  text-success fa-check-square
                      @else
                      fa-2x  text-secondary fa-square-o 
                  @endif" ></i>
                  </td>
                  {{-- ktpibu --}}
                  <td>
                    <i class="fa  @if ($item->ktp_ibu != 'default.jpg')
                      fa-2x  text-success fa-check-square
                      @else
                      fa-2x  text-secondary fa-square-o 
                  @endif" ></i>
                  </td>
                  {{-- ktpwali --}}
                  <td>
                    <i class="fa  @if ($item->ktp_wali != 'default.jpg')
                      fa-2x  text-success fa-check-square
                      @else
                      fa-2x  text-secondary fa-square-o 
                  @endif" ></i>
                  </td>
                  {{-- ijazah --}}
                  <td>
                    <i class="fa  @if ($item->ijazah_akhir != 'default.jpg')
                      fa-2x  text-success fa-check-square
                      @else
                      fa-2x  text-secondary fa-square-o 
                  @endif" >
              
                </i>
                  </td>

                </tr>
            @empty
                <tr>
                  <td colspan="7">Belum ada data</td>
                </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</div>
@endsection