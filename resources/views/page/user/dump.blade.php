<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      @media print {
	@page {
		margin-top: 0;
		margin-bottom: 0;
	}
	body {
		padding-top: 72px;
		padding-bottom: 72px ;
	}
}


    </style>
    <title>Document</title>
</head>
<body>
    <div class="container  border border-dark" style="height: 29,7cm; width:21cm">
        <table style="width: 100%">
           <tr>
                <td rowspan="4"><img src="{{ asset('AdminLTE/dist/img/darulihsan.png') }}" alt="" width="80" class="m-2"></td>
           </tr>
           <tr>
                <td class="fw-semibold fs-5"> {{ Str::upper('Panitia Penerimaan Santri Baru') }}</td>
           </tr>
           <tr>
               <td class="fs-5">DAYAH DARUL IHSAN TGK. H. HASAN KRUENG KALEE</td>
           </tr>
           <tr>
               <td class="fs-5">TAHUN AJARAN {{ $siswa->tahunajar.'-'.intval($siswa->tahunajar)+1 }}</td>
           </tr>
       </table>
        <hr>
        <table class="" style="width: 100%">
            <div class="table-group">
                <tr><td>
                <b>Data Pribadi</b>   
                </td>
                <td style="width: 20%" class="text-center" rowspan=""><div class="fs-6"><b> No.Pendaftaran: {{ 'SB-'.str_pad($siswa->id,3,0,STR_PAD_LEFT)  }} </b></div></td>
            </tr>
                <tr>
                    <td>Nama : <b>{{ Str::upper($siswa->NamaLengkap) }}</b></td> <td  style="width: 3cm;height:4cm;" class="text-center bg-warning" rowspan="6"><div class="bg-warning">
                        <img style="width: 3cm;height:4cm;" src="{{ asset('image/'.$siswa->PasFoto) }}" alt="">    
                    </div></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : @if ($siswa->JKelamin == 'L')
                        <b>Laki-laki</b>
                    @else
                    <b>Perempuan</b>
                    @endif </td> 
                </tr>
                <tr>
                    <td>Tempat/tanggal Lahir : <b>{{ Str::upper($siswa->TptLahir) }} / {{ $siswa->TglLahir }}</b></td>
                </tr>
            </div>
                    <tr><td><br></td></tr>
            <div class="table-group">
                <tr>
                    <td>Mendaftar pada : <b>{{ $siswa->Instansi }}</b></td>
                </tr>
            </div>
            <tr><td><br></td></tr>
            <div class="table-group">
                <tr>
                    <td> <b>Waktu Tes</b></td>
                </tr>
                <tr>
                    <td>
                        <table class="table table-light " style="width: 80%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Tes</th>
                                    <th>Tanggal</th>
                                    <th>Pukul</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tes Tulis</td>
                                    <td>{{ date('d-m-Y') }}</td>
                                    <td>{{ date('H:i') }}</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Wawancara</td>
                                    <td>{{ date('d-m-Y') }}</td>
                                    <td>{{ date('H:i') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </div>

        </table>
        <hr>
        <table style="width: 100%">
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><b>{{ $siswa->SekolahAsal }}</b></td>
                <td class="text-end">NISN : <b>{{ $siswa->NISN }}</b></td>
            </tr>
            <tr>
                <td>Alamat Tinggal</td>
                <td>:</td>
                <td><b>{{ $siswa->AlamatOrtu }}</b></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td>:</td>
                <td><b>{{ Auth::user()->phone }}</b></td>
            </tr>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>