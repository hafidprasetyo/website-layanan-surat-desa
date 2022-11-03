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
                            {{$SuratTujuhbelas->nama}}</h3>
                        @if($SuratTujuhbelas->status == 1)
                        <a href="{{url('surattujuhbelas/admin/status/'.$SuratTujuhbelas->id)}}" class="btn btn-success mr-2">Sudah Tercetak</a>
                        @else
                        <a href="{{url('surattujuhbelas/admin/status/'.$SuratTujuhbelas->id)}}"" class="btn btn-danger mr-2">Belum Tercetak</a>
                        @endif 
                        <form action="{{ route('SuratTujuhbelas.destroy',['SuratTujuhbelas'=>$SuratTujuhbelas->id]) }}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('SuratTujuhbelas.index') }}" class="btn btn-secondary ml-2">Kembali
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
                            {{$SuratTujuhbelas->nik}}
                        </li>
                        <li>Tempat Lahir :
                            {{$SuratTujuhbelas->tempat_lahir}}
                        </li>
                        <li>Tanggal Lahir :
                            {{$SuratTujuhbelas->tanggal_lahir}}
                        </li>
                        <li>Alamat :
                            {{$SuratTujuhbelas->alamat}}
                        </li>
                        <li>Pendidikan :
                            {{$SuratTujuhbelas->pendidikan}}
                        </li>
                        <li>Warga Negara :
                            {{$SuratTujuhbelas->warga_negara}}
                        </li>
                        <li>Agama :
                            {{$SuratTujuhbelas->agama}}
                        </li>
                        <li>Nama Orang Tua/Wali :
                            {{$SuratTujuhbelas->nama_ortu}}
                        </li>
                        <li>Nik Orang Tua/Wali :
                            {{$SuratTujuhbelas->nik_ortu}}
                        </li>
                        <li>Pernyataan :
                            {{$SuratTujuhbelas->pernyataan}}
                        </li>
                        <li>No HP :
                            {{$SuratTujuhbelas->no_hp}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>










    </body>
</html>