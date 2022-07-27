@extends('layouts.masteruser')
@section('DU', 'active')


@section('headercontent')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Daftar Ulang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pelengkapan Berkas</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->

        @endsection
        @section('content')
            <div class="content"> 
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $siswa->NamaLengkap }}</h2>
                           
                            <center>
                            <table class="" style="width: 75%" >
                                <form action="/DaftarUlang" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                      <td>
                                        <label for="exampleInputFile">Hasil Scan KK</label>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td class="" style="vertical-align: middle">
                                            <div class="form-group">
                                              
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="kk" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        {{-- <span class="input-group-text">Upload</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center" style="width: 10%" >
                                            <div class="form-group">
                                            <i
                                                class="fa  @if ($file->foto_kk != 'default.jpg') fa-2x  text-success fa-check-square 
                                          @else
                                          fa-2x  text-secondary fa-square-o @endif"></i>
                                            </div>
                                        </td>
                                        <td>
                                          <div class="form-group">  <button class="btn btn-primary" type="submit">upload</button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <label for="exampleInputFile">KTP Ayah</label></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{-- ktp ayah --}}
                                            <div class="form-group">
                                               
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="ktpayah" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        {{-- <span class="input-group-text">Upload</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- ktp ayah --}}
                                        <td class="text-center" >
                                            <div class="form-group">
                                            <i
                                                class="fa  @if ($file->ktp_ayah != 'default.jpg') fa-2x  text-success fa-check-square
                                          @else
                                          fa-2x  text-secondary fa-square-o @endif"></i>
                                        </div>
                                        </td>
                                        <td>
                                          <div class="form-group">  <button class="btn btn-primary" type="submit">upload</button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="exampleInputFile">KTP ibu</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{-- ktpibu --}}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="ktpibu" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        {{-- <span class="input-group-text">Upload</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- ktpibu --}}
                                        <td class="text-center" >
                                            <div class="form-group">
                                            <i
                                                class="fa  @if ($file->ktp_ibu != 'default.jpg') fa-2x  text-success fa-check-square
                                          @else
                                          fa-2x  text-secondary fa-square-o @endif"></i>
                                            </div>
                                        </td>
                                        <td>
                                          <div class="form-group">  <button class="btn btn-primary" type="submit">upload</button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="exampleInputFile">KTP Wali</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{-- ktpwali --}}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="ktpwali" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        {{-- <span class="input-group-text">Upload</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- ktpwali --}}
                                        <td class="text-center" >
                                             <div class="form-group">
                                            <i
                                                class="fa  @if ($file->ktp_wali != 'default.jpg') fa-2x  text-success fa-check-square
                                          @else
                                          fa-2x  text-secondary fa-square-o @endif"></i>
                                             </div>
                                        </td>
                                        <td>
                                          <div class="form-group">  <button class="btn btn-primary" type="submit">upload</button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="exampleInputFile">IJAZAH Akhir</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{-- ijazah akhir --}}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="ijazah" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        {{-- <span class="input-group-text">Upload</span> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- ijazah --}}
                                        <td class="text-center" >
                                            <div class="form-group">
                                            <i
                                                class="fa  @if ($file->ijazah_akhir != 'default.jpg') fa-2x  text-success fa-check-square
                                          @else
                                          fa-2x  text-secondary fa-square-o @endif">

                                            </i>
                                            </div>
                                        </td>
                                        <td>
                                          <div class="form-group">  <button class="btn btn-primary" type="submit">upload</button></div>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td>
                                            <button class="btn btn-primary" type="submit">submit</button>
                                        </td>
                                    </tr> --}}
                                </form>
                            </table>
                        </center>
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
        @endsection
