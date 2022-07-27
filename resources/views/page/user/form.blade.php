@extends('layouts.masteruser')
@section('PA', 'active')
{{-- @section('headplus')
<link rel="stylesheet" href="{{ asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <script src="./AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
@endsection --}}



@section('headercontent')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang, <b>{{ Str::ucfirst(Auth::user()->name) }}</b> </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Pendaftaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

        @endsection
        @section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
{{--  --}}
<div class="row">
  <div class="col-5 col-sm-3"></div>
  <div class="col">
    <h2>Formulir</h2>
                            <br>
                            <label for="">Nomor Pendaftaran</label>
                            <input disabled type="text" name="nomorpendaftaran" style="font-weight: bold;"
                                value="{{ 'SB-' . str_pad(Auth::user()->id_santri, 3, 0, STR_PAD_LEFT) }}"
                                class=" text-center ">
  </div>
</div>
<div class="row">
  
  <div class="col-5 col-sm-3">
    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Data Pribadi</a>
      <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Data Orang Tua</a>
      <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Data Wali</a>
      <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Lain-lain</a>
    </div>
  </div>
  <div class="col-7 col-sm-9">
    <div class="tab-content" id="vert-tabs-tabContent">
      <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
        <div class="form-group">
          
                            <form action="/home" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- nama --}}
                                <h4>Data Pribadi</h4>
          <label for="exampleInputEmail1">Nama Lengkap</label>
          <input type="text" name="NamaLengkap" value="{{ Str::upper($siswa->NamaLengkap) }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- instansi --}}
      <div class="form-group">
          <label>Instansi</label>
          <select name="instansi" class="custom-select"
              @if ($siswa->confirmed == '1') disabled @endif>
              <option>--Pilih Instansi--</option>
              <option value="MTS" @if ($siswa->Instansi == 'MTS') selected @endif>MTSs
              </option>
              <option value="MAS" @if ($siswa->Instansi == 'MAS') selected @endif>MAs
              </option>
              <option value="SMK" @if ($siswa->Instansi == 'SMK') selected @endif>SMK
              </option>

          </select>
      </div>
      {{-- Jenis Kelamin --}}
      <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="JK" class="custom-select"
              @if ($siswa->confirmed == '1') disabled @endif>
              <option>--Pilih Jenis Kelamin--</option>
              <option value="L" @if ($siswa->JKelamin == 'L') selected @endif>Laki-laki
              </option>
              <option value="P" @if ($siswa->JKelamin == 'P') selected @endif>Perempuan
              </option>
          </select>
      </div>
      {{-- NISN --}}
      <div class="form-group">
          <label for="exampleInputEmail1">NISN</label>
          <input type="text" name="nisn" value="{{ $siswa->NISN }}" class="form-control"
              id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- foto nisn --}}
      <div class="form-group">
          <label for="exampleInputFile">Screenshot NISN</label>
          <div class="input-group">
              <div class="custom-file">
                  <input type="file" name="fotonisn" class="custom-file-input"
                      id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
              </div>
          </div>
      </div>
      {{-- pasfoto --}}
      <div class="form-group">
          <label for="exampleInputFile">Pas Foto 3x4</label>
          <div class="input-group">
              <div class="custom-file">
                  <input type="file" name="pasfoto" class="custom-file-input"
                      id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
              </div>
          </div>
      </div>
      {{-- sekolah asal --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Sekolah Asal</label>
          <input type="text" name="sekolahasal" value="{{ $siswa->SekolahAsal }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- tmpat lahir --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Tempat lahir</label>
          <input type="text" name="tmptlahir" class="form-control"
              value="{{ $siswa->TptLahir }}" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- tgl lahir --}}
      <div class="form-group">
          <label>tanggal lahir</label>
          {{-- <input type="date" class="form-control" value="{{ $siswa->TglLahir }}  name="tgllahir" id=""> --}}
          <input type="date" name="tgllahir" class="form-control"
              value="{{ $siswa->TglLahir }}" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>

      </div>
      {{-- hobi --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Hobi</label>
          <input type="text" name="hobi" class="form-control" value="{{ $siswa->Hobi }}"
              id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- cita-cita --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Cita-cita</label>
          <input type="text" name="citacita" class="form-control"
              value="{{ $siswa->Cita_Cita }}" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- kewarganegaraan --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Kewarganegaraan</label>
          <input type="text" name="warganegara" class="form-control"
              value="{{ $siswa->Kewarganegaraan }}" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      </div>
      <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
        {{-- ayah --}}

        <h4>Data Orang tua</h4>
        <h5>Ayah</h5>

        {{-- nama ayah --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Ayah</label>
            <input type="text" name="ayahnama" value="{{ $siswa->NamaAyah }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- HP ayah --}}
        <div class="form-group">
            <label for="exampleInputEmail1">HP Ayah</label>
            <input type="text" name="ayahhp" value="{{ $siswa->HpAyah }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- Penghasilan --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Penghasilan Ayah</label>
            <input type="text" name="ayahpenghasilan" value="{{ $siswa->PenghasilanAyah }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- pendidikan --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Pendidikan Ayah</label>
            <input type="text" name="ayahpendidikan" value="{{ $siswa->PendidikanAyah }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- pekerjaan --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
            <input type="text" name="ayahpekerjaan" value="{{ $siswa->PekerjaanAyah }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- Ibu --}}
        <br>

        <h5>IBU</h5>

        {{-- nama IBU --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Ibu</label>
            <input type="text" name="ibunama" value="{{ $siswa->NamaIbu }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- HP Ibu --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Hp Ibu</label>
            <input type="text" name="ibuhp" class="form-control"
                value="{{ $siswa->HpIbu }}" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- Penghasilan --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Penghasilan Ibu</label>
            <input type="text" name="ibupenghasilan" class="form-control"
                value="{{ $siswa->PenghasilanIbu }}" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- pendidikan --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Pendidikan Ibu</label>
            <input type="text" name="ibupendidikan" class="form-control"
                value="{{ $siswa->PendidikanIbu }}" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- pekerjaan --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Pekerjaan Ibu</label>
            <input type="text" name="ibupekerjaan" class="form-control"
                value="{{ $siswa->PekerjaanIbu }}" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
      </div>
      <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
        <h4>Data Wali</h4>
        {{-- Wali --}}
        {{-- namawali --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Wali</label>
            <input type="text" name="walinama" value="{{ $siswa->NamaWali }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- hubungan wali --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Hubungan Wali</label>
            <input type="text" name="walihub" value="{{ $siswa->HubunganWali }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- pekerjaanwali --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Pekerjaan Wali</label>
            <input type="text" name="walikerja" value="{{ $siswa->PekerjaanWali }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>
        {{-- hp wali --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Hp Wali</label>
            <input type="text" name="walihp" value="{{ $siswa->HpWali }}"
                class="form-control" id="exampleInputEmail1" placeholder=""
                @if ($siswa->confirmed == '1') disabled @endif>
        </div>

      </div>
      <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
        <div class="form-group">
          <label>Status anak</label>
          <select name="statusanak" class="custom-select"
              @if ($siswa->confirmed == '1') disabled @endif>
              <option>-- yatim/piatu/yatimpiatu --</option>
              <option value="-" @if ($siswa->StatusAnak == '-') selected @endif>-
              </option>
              <option value="yatim" @if ($siswa->StatusAnak == 'yatim') selected @endif>yatim
              </option>
              <option value="piatu" @if ($siswa->StatusAnak == 'piatu') selected @endif>piatu
              </option>
              <option value="yatim-piatu" @if ($siswa->StatusAnak == 'yatim-piatu') selected @endif>
                  yatim-piatu</option>

          </select>
      </div>
      {{-- Alamat Ortu --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Alamat Orangtua</label>
          <input type="text" name="alamat" value="{{ $siswa->AlamatOrtu }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- menetap dengan --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Menetap Dengan</label>
          <input type="text" name="menetap" value="{{ $siswa->MenetapDengan }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- goldar --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Golongan Darah</label>
          <input type="text" name="goldar" value="{{ $siswa->Goldar }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- tb --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Tinggi Badan</label>
          <input type="text" name="tb" value="{{ $siswa->TB }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- bb --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Berat Badan</label>
          <input type="text" name="bb" value="{{ $siswa->BB }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- alergi --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Alergi</label>
          <input type="text" name="alergi" value="{{ $siswa->Alergi }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      {{-- riwayat sakit --}}
      <div class="form-group">
          <label for="exampleInputEmail1">Riwayat Sakit</label>
          <input type="text" name="riwayatsehat" value="{{ $siswa->RiwayatSakit }}"
              class="form-control" id="exampleInputEmail1" placeholder=""
              @if ($siswa->confirmed == '1') disabled @endif>
      </div>
      <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#modal-default" @if ($siswa->confirmed == '1') disabled @endif>
                                        Simpan
                                    </button>
                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Default Modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-check">
                                                        <input type="checkbox" id="checkme" value="1"
                                                            name="checkme" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Saya telah
                                                            Mengisi data dengan benar adanya</label>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        Anda tidak dapat mengedit kembali data jika sudah mengkonfirmasi
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" id="sendSMS" name="sendSMS"
                                                        disabled="disabled" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
   
      </div>
    </div>
  </div>
</div>

                                <div class="card-footer">
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
        @endsection
        @section('footplus')

            <script src="{{ asset('/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
            {{-- <<script src="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script> --}}

            <script>
                $(function() {
                    bsCustomFileInput.init();
                });
            </script>
            <script>
                var checker = document.getElementById('checkme');
                var sendbtn = document.getElementById('sendSMS');
                // when unchecked or checked, run the function
                checker.onchange = function() {
                    if (this.checked) {
                        sendbtn.disabled = false;
                    } else {
                        sendbtn.disabled = true;
                    }

                }
            </script>
        @endsection
