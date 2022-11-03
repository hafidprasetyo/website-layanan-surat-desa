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
                            {{$SuratDua->nama}}</h3>
                        @if($SuratDua->status == 1)
                        <a href="{{url('suratdua/admin/status/'.$SuratDua->id)}}" class="btn btn-success mr-2">Sudah Tercetak</a>
                        @else
                        <a href="{{url('suratdua/admin/status/'.$SuratDua->id)}}"" class="btn btn-danger mr-2">Belum Tercetak</a>
                        @endif 
                        <form action="{{ route('SuratDua.destroy',['SuratDua'=>$SuratDua->id]) }}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('SuratDua.index') }}" class="btn btn-secondary ml-2">Kembali
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
                            {{$SuratDua->nik}}
                        </li>
                        <li>Tempat Lahir :
                            {{$SuratDua->tempat_lahir}}
                        </li>
                        <li>Tanggal Lahir :
                            {{$SuratDua->tanggal_lahir}}
                        </li>
                        <li>Alamat :
                            {{$SuratDua->alamat}}
                        </li>
                        <li>Pendidikan :
                            {{$SuratDua->pendidikan}}
                        </li>
                        <li>Warga Negara :
                            {{$SuratDua->warga_negara}}
                        </li>
                        <li>Agama :
                            {{$SuratDua->agama}}
                        </li>
                        <li>Jenis Permohonan :
                            {{$SuratDua->jenis_permohonan}}
                        </li>
                        <li>Negara Tujuan :
                            {{$SuratDua->negara_tujuan}}
                        </li>
                        <li>Kode Negara :
                            {{$SuratDua->kode_negara}}
                        </li>
                        <li>Alamat Tujuan :
                            {{$SuratDua->alamat_tujuan}}
                        </li>
                        <li>Penanggung Jawab :
                            {{$SuratDua->penanggung_jawab}}
                        </li>
                        <li>Rencana Pindah :
                            {{$SuratDua->rencana_pindah}}
                        </li>
                        <li>Nama Sponsor :
                            {{$SuratDua->nama_sponsor}}
                        </li>
                        <li>Tipe Sponsor :
                            {{$SuratDua->tipe_sponsor}}
                        </li>
                        <li>Alamat Sponsor :
                            {{$SuratDua->alamat_sponsor}}
                        </li>
                        <li>Nomor KITAS & KITAP :
                            {{$SuratDua->nomor}}
                        </li>
                        <li>Tanggal Masa Berlaku KITAS & KITAB :
                            {{$SuratDua->tanggal_masa}}
                        </li>
                        <li>Lokasi Pindah :
                            {{$SuratDua->lokasi_pindah}}
                        </li>
                        <li>Alamat Tujuan :
                            {{$SuratDua->alamat_tujuan_1}}
                        </li>
                        <li>Provinsi Tujuan :
                            {{$SuratDua->provinsi_tujuan}}
                        </li>
                        <li>Kabupaten Tujuan :
                            {{$SuratDua->kabupaten_tujuan}}
                        </li>
                        <li>Kecamatan Tujuan :
                            {{$SuratDua->kecamatan_tujuan}}
                        </li>
                        <li>Kelurahan/Desa Tujuan :
                            {{$SuratDua->kelurahan_tujuan}}
                        </li>
                        <li>Dusun Tujuan :
                            {{$SuratDua->dusun_tujuan}}
                        </li>
                        <li>RW Tujuan :
                            {{$SuratDua->rw_tujuan}}
                        </li>
                        <li>RT Tujuan :
                            {{$SuratDua->rt_tujuan}}
                        </li>
                        <li>Kode Pos :
                            {{$SuratDua->kode_pos}}
                        </li>
                        <li>Telepon :
                            {{$SuratDua->telepon}}
                        </li>
                        <li>Alasan Pindah :
                            {{$SuratDua->alasan_pindah}}
                        </li>
                        <li>Lainnya :
                            {{$SuratDua->lainnya}}
                        </li>
                        <li>Jenis Kepindahan :
                            {{$SuratDua->jenis_kepindahan}}
                        </li>
                        <li>Status KK Yang Tidak Pindah :
                            {{$SuratDua->statuskk_tidakpindah}}
                        </li>
                        <li>Status KK Yang Pindah :
                            {{$SuratDua->statuskk_pindah}}
                        </li>
                        <li>Keluarga Pindah :
                            {{$SuratDua->keluarga_pindah}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Pertama :
                            {{$SuratDua->keluarga_pindah_1}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Kedua :
                            {{$SuratDua->keluarga_pindah_2}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Ketiga:
                            {{$SuratDua->keluarga_pindah_3}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Keempat :
                            {{$SuratDua->keluarga_pindah_4}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Kelima :
                            {{$SuratDua->keluarga_pindah_5}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Keenam :
                            {{$SuratDua->keluarga_pindah_6}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Ketujuh :
                            {{$SuratDua->keluarga_pindah_7}}
                        </li>
                        <li>Nama dan Nik Keluarga Pindah Kedelapan :
                            {{$SuratDua->keluarga_pindah_8}}
                        </li>
                        <li>No HP :
                            {{$SuratDua->no_hp}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>










    </body>
</html>