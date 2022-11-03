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
                            {{$SuratSembilan->nama}}</h3>
                        @if($SuratSembilan->status == 1)
                        <a href="{{url('suratsembilan/admin/status/'.$SuratSembilan->id)}}" class="btn btn-success mr-2">Sudah Tercetak</a>
                        @else
                        <a href="{{url('suratsembilan/admin/status/'.$SuratSembilan->id)}}"" class="btn btn-danger mr-2">Belum Tercetak</a>
                        @endif 
                        <form action="{{ route('SuratSembilan.destroy',['SuratSembilan'=>$SuratSembilan->id]) }}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('SuratSembilan.index') }}" class="btn btn-secondary ml-2">Kembali
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
                            {{$SuratSembilan->nik}}
                        </li>
                        <li>Tempat Lahir :
                            {{$SuratSembilan->tempat_lahir}}
                        </li>
                        <li>Tanggal Lahir :
                            {{$SuratSembilan->tanggal_lahir}}
                        </li>
                        <li>Provinsi Asal :
                            {{$SuratSembilan->provinsi_asal}}
                        </li>
                        <li>Kabupaten Asal :
                            {{$SuratSembilan->kabupaten_asal}}
                        </li>
                        <li>kecamatan Asal :
                            {{$SuratSembilan->kecamatan_asal}}
                        </li>
                        <li>Desa/Kelurahan Asal :
                            {{$SuratSembilan->kelurahan_asal}}
                        </li>
                        <li>Dusun Asal :
                            {{$SuratSembilan->dusun_asal}}
                        </li>
                        <li>RT Asal :
                            {{$SuratSembilan->rt_asal}}
                        </li>
                        <li>RW Asal :
                            {{$SuratSembilan->rw_asal}}
                        </li>
                        <li>Jenis Kelamin :
                            {{$SuratSembilan->jenis_kelamin}}
                        </li>
                        <li>Pekerjaan :
                            {{$SuratSembilan->pekerjaan}}
                        </li>
                        <li>Agama :
                            {{$SuratSembilan->agama}}
                        </li>
                        <li>Dusun Domisili :
                            {{$SuratSembilan->dusun_domisili}}
                        </li>
                        <li>RW Domisili :
                            {{$SuratSembilan->rw_domisili}}
                        </li>
                        <li>RT Domisili :
                            {{$SuratSembilan->rt_domisili}}
                        </li>
                        <li>Keterangan :
                            {{$SuratSembilan->keterangan}}
                        </li>
                        <li>Keterangan Lain :
                            {{$SuratSembilan->keterangan_lain}}
                        </li>
                        <li>No HP :
                            {{$SuratSembilan->no_hp}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>










    </body>
</html>