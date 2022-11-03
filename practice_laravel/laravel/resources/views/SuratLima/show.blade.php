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
                            {{$SuratLima->nama}}</h3>
                        @if($SuratLima->status == 1)
                        <a href="{{url('suratlima/admin/status/'.$SuratLima->id)}}" class="btn btn-success mr-2">Sudah Tercetak</a>
                        @else
                        <a href="{{url('suratlima/admin/status/'.$SuratLima->id)}}"" class="btn btn-danger mr-2">Belum Tercetak</a>
                        @endif 
                        <form action="{{ route('SuratLima.destroy',['SuratLima'=>$SuratLima->id])}}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('SuratLima.index') }}" class="btn btn-secondary ml-2">Kembali
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
                            {{$SuratLima->nik}}
                        </li>
                        <li>Tempat Lahir :
                            {{$SuratLima->tempat_lahir}}
                        </li>
                        <li>Tanggal Lahir :
                            {{$SuratLima->tanggal_lahir}}
                        </li>
                        <li>Alamat :
                            {{$SuratLima->alamat}}
                        </li>
                        <li>Pendidikan :
                            {{$SuratLima->pendidikan}}
                        </li>
                        <li>Warga Negara :
                            {{$SuratLima->warga_negara}}
                        </li>
                        <li>Agama :
                            {{$SuratLima->agama}}
                        </li>
                        <li>No Dokumen :
                            {{$SuratLima->no_dokumen}}
                        </li>
                        <li>Nama Jenzah :
                            {{$SuratLima->nama_jenazah}}
                        </li>
                        <li>Tanggal Kematian :
                            {{$SuratLima->tanggal}}
                        </li>
                        <li>Waktu Kematian :
                            {{$SuratLima->waktu}}
                        </li>
                        <li>Sebab Kematian :
                            {{$SuratLima->sebab_kematian}}
                        </li>
                        <li>Tempat Kematian :
                            {{$SuratLima->tempat_kematian}}
                        </li>
                        <li>Yang Menerangkan :
                            {{$SuratLima->yang_menerangkan}}
                        </li>
                        <li>Status Ayah :
                            {{$SuratLima->status_ayah}}
                        </li>
                        <li>Nama Ayah :
                            {{$SuratLima->nama_ayah}}
                        </li>
                        <li>Nik Ayah :
                            {{$SuratLima->nik_ayah}}
                        </li>
                        <li>Tempat Lahir Ayah :
                            {{$SuratLima->tempat_lahir_ayah}}
                        </li>
                        <li>Tanggal Lahir Ayah :
                            {{$SuratLima->tanggal_lahir_ayah}}
                        </li>
                        <li>Kewarganegaraan Ayah :
                            {{$SuratLima->kewarganegaraan_ayah}}
                        </li>
                        <li>Status Ibu :
                            {{$SuratLima->status_ibu}}
                        </li>
                        <li>Nama Ibu :
                            {{$SuratLima->nama_ibu}}
                        </li>
                        <li>Nik Ibu :
                            {{$SuratLima->nik_ibu}}
                        </li>
                        <li>Tempat Lahir Ibu :
                            {{$SuratLima->tempat_lahir_ibu}}
                        </li>
                        <li>Tanggal Lahir Ibu :
                            {{$SuratLima->tanggal_lahir_ibu}}
                        </li>
                        <li>Kewarganegaraan Ibu :
                            {{$SuratLima->kewarganegaraan_ibu}}
                        </li>
                        <li>Saksi I :
                            {{$SuratLima->saksi_satu}}
                        </li>
                        <li>Saksi II :
                            {{$SuratLima->saksi_dua}}
                        </li>
                        <li>No HP :
                            {{$SuratLima->no_hp}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>










    </body>
</html>