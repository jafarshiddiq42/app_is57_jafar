@extends('layouts.masteradmin')
@section('headerplus')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('SB','active')
    

@section('headercontent')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Ini Halaman santri Baru</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Santri Baru</li>
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
            <h3 class="card-title">Daftar Santri</h3>

            {{-- <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div> --}}
          </div>
          <!-- /.card-header -->
          <div class="card-body  p-3" >
            <table class="table table-hover table-head-fixed text-nowrap" id="santris">
              <thead>
                <tr class="text-center">
                  <th class="text-left">Nama</th>
                  <th>ID</th>
                  <th>NISN</th>
                  <th>Jenis Kelamin</th>
                  <th>Instansi</th>
                  <th>Nama Ayah</th>
                  <th>Asal Sekolah</th>
                  <th>detail</th>
                  
                </tr>
              </thead>
              <tbody>
               @forelse ($siswa as $item)
                   <tr class="text-center">
                     <td class="text-left">{{ Str::upper($item->NamaLengkap) }}</td>
                     <td>{{ 'SB-'.str_pad($item->id,3,0,STR_PAD_LEFT) }}</td>
                     <td>{{ $item->NISN }}</td>
                     @if ($item->JKelamin == 'L')
                     <td>Laki-Laki</td>
                     @else
                     <td>Perempuan</td>
                     @endif
                     <td>{{ $item->Instansi }}</td>
                     <td>{{ $item->NamaAyah }}</td>
                     <td>{{ $item->SekolahAsal }}</td>
                     <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#a{{$item->id}}">
                      lihat data
                    </button>
                    <div class="modal fade" id="a{{$item->id}}">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Detail</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <div class="card-body table-responsive p-0" >
                            <table class="text-left  " style="width: 100%" >
                              
                              {{-- data pribadi --}}
                              <tr>
                                <td>Nama Lengkap</td><td><b>{{ Str::upper($item->NamaLengkap) }}</b></td>
                                <td   colspan="2" rowspan="" class="text-center"><b>Nomor Pendaftaran</b><br>{{ 'SB-'.str_pad($item->id,3,0,STR_PAD_LEFT) }}</td>
                              </tr>  
                              
                              <tr>
                                <td>Instansi</td><td><b>{{ $item->Instansi }}</b></td>
                                <td colspan="2" rowspan="3" class="text-center"><img width="150px"  height="204"  src="{{ asset('image/'.$item->PasFoto) }}" alt="{{ $item->PasFoto }}"></div></td>
                              </tr>  
                              <tr>
                                <td>Jenis Kelamin</td>
                                @if ($item->JKelamin == 'L')
                                <td><b>Laki-Laki</b></td>
                                @else
                                <td><b>Perempuan</b></td>
                                @endif
                              </tr>  
                              <tr>
                                <td>Sekolah Asal</td><td><b>{{ $item->SekolahAsal }}</b></td>
                              </tr>  
                              <tr>
                              </tr>  
                              <tr>
                                <td style="width: 25%">Tempat/Tanggal Lahir</td><td style="width: 25%"><b>{{ $item->TptLahir."/".$item->TglLahir  }}</b></td>
                                <td style="width: 25%">NISN</td><td style="width: 25%"><b>{{ $item->NISN }}</b></td>
                              </tr>                 
                              <tr>
                                <td>Hobi</td><td><b>{{ $item->Hobi }}</b></td>
                                <td>Foto NISN</td><td><img width="100px" src="{{ asset('image/'.$item->fotoNisn) }}" alt="fotonisn"></td>
                              </tr>  
                              <tr>
                                <td>Cita-Cita</td><td><b>{{ $item->Cita_Cita }}</b></td>
                                <td>Kewarganegaraan</td><td><b>{{ $item->Kewarganegaraan }}</b></td>

                              </tr>  
                              <tr>
                                <td colspan="4"><hr></td>
                              </tr> 
                              
                              {{-- keluarga  --}}
                              {{-- ayah --}}
                              <tr >
                                <td>Nama Ayah</td><td><b>{{ $item->NamaAyah }}</b></td>
                                <td>Pendidikan Ayah</td><td><b>{{ $item->PendidikanAyah }}</b></td>

                              </tr>  
                              <tr>
                                <td>HP Ayah</td><td><b>{{ $item->HpAyah }}</b></td>
                                <td>Pekerjaan Ayah</td><td><b>{{ $item->PekerjaanAyah }}</b></td>

                              </tr>  
                              <tr>
                                <td>Penghasilan Ayah</td><td><b>{{ $item->PenghasilanAyah }}</b></td>
                              </tr>  
                               
                              <tr>
                                <td colspan="4"><hr></td>
                              </tr>
                                {{-- ibu --}}
                              <tr>
                                <td>Nama Ibu</td><td><b>{{ $item->NamaIbu }}</b></td>
                                <td>Pendidikan Ibu</td><td><b>{{ $item->PendidikanIbu }}</b></td>

                              </tr>  
                              <tr>
                                <td>HP Ibu</td><td><b>{{ $item->HpIbu }}</b></td>
                                <td>Pekerjaan Ibu</td><td><b>{{ $item->PekerjaanIbu }}</b></td>

                              </tr>  
                              <tr>
                                <td>Penghasilan Ibu</td><td><b>{{ $item->PenghasilanIbu }}</b></td>
                              </tr>  
                               
                              <tr>
                                <td><hr></td>
                              </tr> 
                               {{-- lain lain --}}
                              <tr>
                                <td>Status Anak</td><td><b>{{ $item->StatusAnak }}</b></td>
                              </tr>  
                              <tr>
                                <td>Alamat</td><td colspan="3"><b>{{ $item->AlamatOrtu }}</b></td>
                              </tr>  
                              <tr>
                                <td>Menetap</td><td><b>{{ $item->MenetapDengan }}</b></td>
                                <td>Tinggi Badan</td><td><b>{{ $item->TB." CM" }}</b></td>

                              </tr>  
                              <tr>
                                <td>Goldar</td><td><b>{{ $item->Goldar }}</b></td>
                                <td>Berat Badan</td><td><b>{{ $item->BB." KG" }}</b></td>

                              </tr>  
                               
                              <tr>
                                <td>alergi</td><td><b>{{ $item->Alergi }}</b></td>
                              </tr>  
                              <tr>
                                <td>Riwayat Sakit</td><td><b>{{ $item->RiwayatSakit }}</b></td>
                              </tr> 
                              <tr><td><hr></td></tr>
                              {{-- wali --}}
                              <tr>
                                <td>Nama Wali</td><td><b>{{ $item->NamaWali }}</b></td>
                                <td>hubungan wali</td><td><b>{{ $item->HubunganWali }}</b></td>

                              </tr>  
                              <tr>
                                <td>HP wali</td><td><b>{{ $item->HpWali }}</b></td>
                                <td>Pekerjaan wali</td><td><b>{{ $item->PekerjaanWali }}</b></td>

                              </tr>  
                             
                            </table>  
                              </div>
                            
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    {{-- end modal --}}
                  </td>
                   </tr>
                   
                  
               @empty
               <tr>
                <td colspan="6" class="text-center">belum ada data</td>
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
@section('footplus')
 <!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $("#santris").DataTable({

           
    "language": {
                "loadingRecords": "Please wait - loading...",
                "sSearch": "Cari",
                "lengthMenu": "menampilkan _MENU_ baris",
                "paginate": {
                     "next": "berikutnya",
                     "previous":"sebelumnya"
                        }
                
            },
            order: [[1, 'desc']],
            
  })
</script>
@endsection