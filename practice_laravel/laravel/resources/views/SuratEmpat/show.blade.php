<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <!-- Tell the browser to be responsive to screen width -->
       <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
            name="viewport">
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
        -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]> <script
        src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script
        src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

        <!-- Google Font -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!--Boostrap Css -->
        <link href="../laravel/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="../assets/img/PIP.png"/>
        <title>Layanan Surat Desa Grujugan</title>
    </head>
    <body>
        <div class="container mt-3 bg-light text-dark">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 d-flex justify-content-end align-items-center">
                        <h3 class="mr-auto">Surat Dari 
                            {{$SuratEmpat->nama}}</h3>
                        @if($SuratEmpat->status == 1)
                        <a href="{{url('suratempat/admin/status/'.$SuratEmpat->id)}}" class="btn btn-success mr-2">Sudah Tercetak</a>
                        @else
                        <a href="{{url('suratempat/admin/status/'.$SuratEmpat->id)}}"" class="btn btn-danger mr-2">Belum Tercetak</a>
                        @endif 
                        <form action="{{ route('SuratEmpat.destroy',['SuratEmpat'=>$SuratEmpat->id])}}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('SuratEmpat.index') }}" class="btn btn-secondary ml-2">Kembali
                        </a>
                    </div>
                    <hr>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif
                    <ul>
                        <li>Nik :
                            {{$SuratEmpat->nik}}
                        </li>
                        <li>Tempat Lahir :
                            {{$SuratEmpat->tempat_lahir}}
                        </li>
                        <li>Tanggal Lahir :
                            {{$SuratEmpat->tanggal_lahir}}
                        </li>
                        <li>Alamat :
                            {{$SuratEmpat->alamat}}
                        </li>
                        <li>Pendidikan :
                            {{$SuratEmpat->pendidikan}}
                        </li>
                        <li>Warga Negara :
                            {{$SuratEmpat->warga_negara}}
                        </li>
                        <li>Agama :
                            {{$SuratEmpat->agama}}
                        </li>
                        <li>No Dokumen :
                            {{$SuratEmpat->no_dokumen}}
                        </li>
                        <li>Nama Bayi :
                            {{$SuratEmpat->nama_bayi}}
                        </li>
                        <li>Jenis Kelamin :
                            {{$SuratEmpat->jenis_kelamin}}
                        </li>
                        <li>Tempat Dilahirkan  :
                            {{$SuratEmpat->tempat_dilahirkan}}
                        </li>
                        <li>Tempat Kelahiran :
                            {{$SuratEmpat->tempat_kelahiran}}
                        </li>
                        <li>Tanggal Lahir :
                            {{$SuratEmpat->tanggal}}
                        </li>
                        <li>Waktu Lahir :
                            {{$SuratEmpat->waktu}}
                        </li>
                        <li>Jenis Kelahiran :
                            {{$SuratEmpat->jenis_kelahiran}}
                        </li>
                        <li>Kelahiran Ke :
                            {{$SuratEmpat->kelahiran_ke}}
                        </li>
                        <li>Penolong Kelahiran :
                            {{$SuratEmpat->penolong_kelahiran}}
                        </li>
                        <li>Berat Bayi :
                            {{$SuratEmpat->berat_bayi}}
                        </li>
                        <li>Panjang Bayi :
                            {{$SuratEmpat->panjang_bayi}}
                        </li>
                        <li>Status Ayah :
                            {{$SuratEmpat->status_ayah}}
                        </li>
                        <li>Nama Ayah :
                            {{$SuratEmpat->nama_ayah}}
                        </li>
                        <li>Nik Ayah :
                            {{$SuratEmpat->nik_ayah}}
                        </li>
                        <li>Tempat Lahir Ayah :
                            {{$SuratEmpat->tempat_lahir_ayah}}
                        </li>
                        <li>Tanggal Lahir Ayah :
                            {{$SuratEmpat->tanggal_lahir_ayah}}
                        </li>
                        <li>Kewarganegaraan Ayah :
                            {{$SuratEmpat->kewarganegaraan_ayah}}
                        </li>
                        <li>Status Ibu :
                            {{$SuratEmpat->status_ibu}}
                        </li>
                        <li>Nama Ayah :
                            {{$SuratEmpat->nama_ibu}}
                        </li>
                        <li>Nik Ibu :
                            {{$SuratEmpat->nik_ibu}}
                        </li>
                        <li>Tempat Lahir Ibu :
                            {{$SuratEmpat->tempat_lahir_ibu}}
                        </li>
                        <li>Tanggal Lahir Ibu :
                            {{$SuratEmpat->tanggal_lahir_ibu}}
                        </li>
                        <li>Kewarganegaraan Ibu :
                            {{$SuratEmpat->kewarganegaraan_ibu}}
                        </li>
                        <li>Saksi I :
                            {{$SuratEmpat->saksi_satu}}
                        </li>
                        <li>Saksi II :
                            {{$SuratEmpat->saksi_dua}}
                        </li>
                        <li>No HP :
                            {{$SuratEmpat->no_hp}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>










    </body>
</html>