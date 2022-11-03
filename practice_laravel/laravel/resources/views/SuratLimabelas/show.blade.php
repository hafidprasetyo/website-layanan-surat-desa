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
                            {{$SuratLimabelas->data_pria_wargadesa}}</h3>
                        @if($SuratLimabelas->status == 1)
                        <a href="{{url('suratlimabelas/admin/status/'.$SuratLimabelas->id)}}" class="btn btn-success mr-2">Sudah Tercetak</a>
                        @else
                        <a href="{{url('suratlimabelas/admin/status/'.$SuratLimabelas->id)}}"" class="btn btn-danger mr-2">Belum Tercetak</a>
                        @endif 
                        <form action="{{ route('SuratLimabelas.destroy',['SuratLimabelas'=>$SuratLimabelas->id]) }}" method="POST">
                            @method('DELETE') @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('SuratLimabelas.index') }}" class="btn btn-secondary ml-2">Kembali
                        </a>
                    </div>
                    <hr>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan') }}
                    </div>
                    @endif
                    <ul>
                        <li>Nik Pria (Warga Desa) :
                            {{$SuratLimabelas->nik_pria_wargadesa}}
                        </li>
                        <li>Nama Pria (Warga Desa) :
                            {{$SuratLimabelas->nama_pria_wargadesa}}
                        </li>
                        <li>Status Pria (Warga Desa) :
                            {{$SuratLimabelas->status_pria_wargadesa}}
                        </li>
                        <li>Jika Duda,Nama Istri :
                            {{$SuratLimabelas->namaistri_pria_wargadesa}}
                        </li>
                        <li>Jika Beristri,istri ke :
                            {{$SuratLimabelas->istri_ke_wargadesa}}
                        </li>
                        <li>Nik Pria (Luar Desa) :
                            {{$SuratLimabelas->nik_pria_wargaluardesa}}
                        </li>
                        <li>Nama Pria (Luar Desa) :
                            {{$SuratLimabelas->nama_pria_wargaluardesa}}
                        </li>
                        <li>Tempat Lahir Pria (Luar Desa) :
                            {{$SuratLimabelas->tempat_lahir_pria_wargaluardesa}}
                        </li>
                        <li>Tanggal Lahir Pria (Luar Desa) :
                            {{$SuratLimabelas->tanggal_lahir_pria_wargaluardesa}}
                        </li>
                        <li>Warga Negara Pria (Luar Desa) :
                            {{$SuratLimabelas->warga_negara_pria_wargaluardesa}}
                        </li>
                        <li>Agama Pria (Luar Desa) :
                            {{$SuratLimabelas->agama_pria_wargaluardesa}}
                        </li>
                        <li>Pekerjaan Pria (Luar Desa) :
                            {{$SuratLimabelas->pekerjaan_pria_wargaluardesa}}
                        </li>
                        <li>Alamat Pria (Luar Desa) :
                            {{$SuratLimabelas->alamat_pria_wargaluardesa}}
                        </li>
                        <li>Status Pria (Luar Desa) :
                            {{$SuratLimabelas->status_pria_wargaluardesa}}
                        </li>
                        <li>Jika Duda,Nama Istri :
                            {{$SuratLimabelas->namaistri_pria_wargaluardesa}}
                        </li>
                        <li>Jika Beristri,istri ke :
                            {{$SuratLimabelas->istri_ke_wargaluardesa}}
                        </li>
                        <li>Data Ayah Pasangan Pria :
                            {{$SuratLimabelas->data_ayahpria_wargadesa}}
                        </li>
                        <li>Nik Ayah (Pria Warga Desa) :
                            {{$SuratLimabelas->nik_ayahpria_wargadesa}}
                        </li>
                        <li>Nama Ayah (Pria Warga Desa) :
                            {{$SuratLimabelas->nama_ayahpria_wargadesa}}
                        </li>
                        <li>Nik Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->nik_ayahpria_wargaluardesa}}
                        </li>
                        <li>Bin (Ayah Pria Luar Desa) :
                            {{$SuratLimabelas->bin_ayahpria_wargaluardesa}}
                        </li>
                        <li>Nama Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->nama_ayahpria_wargaluardesa}}
                        </li>
                        <li>Tempat Lahir Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->tempat_lahir_ayahpria_wargaluardesa}}
                        </li>
                        <li>Tanggal Lahir Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->tanggal_lahir_ayahpria_wargaluardesa}}
                        </li>
                        <li>Warga Negara Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->warga_negara_ayahpria_wargaluardesa}}
                        </li>
                        <li>Agama Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->agama_ayahpria_wargaluardesa}}
                        </li>
                        <li>Pekerjaan Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->pekerjaan_ayahpria_wargaluardesa}}
                        </li>
                        <li>Alamat Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->alamat_ayahpria_wargaluardesa}}
                        </li>
                        <li>Agama Ayah (Pria Luar Desa) :
                            {{$SuratLimabelas->agama_ayahpria_wargaluardesa}}
                        </li>
                        <li>Data Ibu Pasangan Pria :
                            {{$SuratLimabelas->data_ibupria_wargadesa}}
                        </li>
                        <li>Nik Ibu (Pria Warga Desa) :
                            {{$SuratLimabelas->nik_ibupria_wargadesa}}
                        </li>
                        <li>Nama Ibu (Pria Warga Desa) :
                            {{$SuratLimabelas->nama_ibupria_wargadesa}}
                        </li>
                        <li>Nik Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->nik_ibupria_wargaluardesa}}
                        </li>
                        <li>Binti (Ibu Pria Luar Desa) :
                            {{$SuratLimabelas->binti_ibupria_wargaluardesa}}
                        </li>
                        <li>Nama Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->nama_ibupria_wargaluardesa}}
                        </li>
                        <li>Tempat Lahir Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->tempat_lahir_ibupria_wargaluardesa}}
                        </li>
                        <li>Tanggal Lahir Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->tanggal_lahir_ibupria_wargaluardesa}}
                        </li>
                        <li>Warga Negara Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->warga_negara_ibupria_wargaluardesa}}
                        </li>
                        <li>Agama Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->agama_ibupria_wargaluardesa}}
                        </li>
                        <li>Pekerjaan Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->pekerjaan_ibupria_wargaluardesa}}
                        </li>
                        <li>Alamat Ibu (Pria Luar Desa) :
                            {{$SuratLimabelas->alamat_ibupria_wargaluardesa}}
                        </li>
                        <li>Data Calon Pasangan Wanita :
                            {{$SuratLimabelas->data_wanita_wargadesa}}
                        </li>
                        <li>Nik Wanita (Warga Desa) :
                            {{$SuratLimabelas->nik_wanita_wargadesa}}
                        </li>
                        <li>Nama Wanita (Warga Desa) :
                            {{$SuratLimabelas->nama_wanita_wargadesa}}
                        </li>
                        <li>Jika wanita, terangkan perawan atau janda :
                            {{$SuratLimabelas->status_wanita_wargadesa}}
                        </li>
                        <li>Nik Wanita (Luar Desa) :
                            {{$SuratLimabelas->nik_wanita_wargaluardesa}}
                        </li>
                        <li>Nama Wanita (Luar Desa) :
                            {{$SuratLimabelas->nama_wanita_wargaluardesa}}
                        </li>
                        <li>Tempat Lahir Wanita (Luar Desa) :
                            {{$SuratLimabelas->tempat_lahir_wanita_wargaluardesa}}
                        </li>
                        <li>Tanggal Lahir Wanita (Luar Desa) :
                            {{$SuratLimabelas->tanggal_lahir_wanita_wargaluardesa}}
                        </li>
                        <li>Warga Negara Wanita (Luar Desa) :
                            {{$SuratLimabelas->warga_negara_wanita_wargaluardesa}}
                        </li>
                        <li>Agama Wanita (Luar Desa) :
                            {{$SuratLimabelas->agama_wanita_wargaluardesa}}
                        </li>
                        <li>Pekerjaan Wanita (Luar Desa) :
                            {{$SuratLimabelas->pekerjaan_wanita_wargaluardesa}}
                        </li>
                        <li>Alamat Wanita (Luar Desa) :
                            {{$SuratLimabelas->alamat_wanita_wargaluardesa}}
                        </li>
                        <li>Jika wanita, terangkan perawan atau janda :
                            {{$SuratLimabelas->status_wanita_wargaluardesa}}
                        </li>
                        <li>Data Ayah Pasangan Wanita:
                            {{$SuratLimabelas->data_ayahwanita_wargadesa}}
                        </li>
                        <li>Nik Ayah (Wanita Warga Desa):
                            {{$SuratLimabelas->nik_ayahwanita_wargadesa}}
                        </li>
                        <li>Nama Ayah (Wanita Warga Desa):
                            {{$SuratLimabelas->nama_ayahwanita_wargadesa}}
                        </li>
                        <li>Nik Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->nik_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Bin (Ayah Wanita Luar Desa) :
                            {{$SuratLimabelas->bin_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Nama Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->nama_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Tempat Lahir Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->tempat_lahir_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Tanggal Lahir Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->tanggal_lahir_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Warga Negara Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->warga_negara_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Agama Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->agama_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Pekerjaan Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->pekerjaan_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Alamat Ayah (Wanita Luar Desa) :
                            {{$SuratLimabelas->alamat_ayahwanita_wargaluardesa}}
                        </li>
                        <li>Data Ibu Pasangan Wanita :
                            {{$SuratLimabelas->data_ibuwanita_wargadesa}}
                        </li>
                        <li>Nik Ibu (Wanita Warga Desa) :
                            {{$SuratLimabelas->nik_ibuwanita_wargadesa}}
                        </li>
                        <li>Nama Ibu (Wanita Warga Desa) :
                            {{$SuratLimabelas->nama_ibuwanita_wargadesa}}
                        </li>
                        <li>Nik Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->nik_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Binti (Ibu Wanita Luar Desa) :
                            {{$SuratLimabelas->binti_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Nama Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->nama_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Tempat Lahir Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->tempat_lahir_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Tanggal Lahir (Ibu Wanita Luar Desa) :
                            {{$SuratLimabelas->tanggal_lahir_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Warga Negara Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->warga_negara_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Agama Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->agama_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Pekerjaan Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->pekerjaan_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Alamat Ibu (Wanita Luar Desa) :
                            {{$SuratLimabelas->alamat_ibuwanita_wargaluardesa}}
                        </li>
                        <li>Nik Wali Nikah :
                            {{$SuratLimabelas->nik_walinikah}}
                        </li>
                        <li>Bin Wali Nikah :
                            {{$SuratLimabelas->bin_walinikah}}
                        </li>
                        <li>Nama Wali Nikah :
                            {{$SuratLimabelas->nama_walinikah}}
                        </li>
                        <li>Tempat Lahir Wali Nikah :
                            {{$SuratLimabelas->tempat_lahir_walinikah}}
                        </li>
                        <li>Tanggal Lahir Wali Nikah :
                            {{$SuratLimabelas->tanggal_lahir_walinikah}}
                        </li>
                        <li>Warga Negara Wali Nikah :
                            {{$SuratLimabelas->warga_negara_walinikah}}
                        </li>
                        <li>Agama Wali Nikah :
                            {{$SuratLimabelas->agama_walinikah}}
                        </li>
                        <li>Pekerjaan Wali Nikah :
                            {{$SuratLimabelas->pekerjaan_walinikah}}
                        </li>
                        <li>Alamat Wali Nikah :
                            {{$SuratLimabelas->alamat_walinikah}}
                        </li>
                        <li>Hubungan Wali Nikah :
                            {{$SuratLimabelas->hubungan_walinikah}}
                        </li>
                        <li>Hari Nikah :
                            {{$SuratLimabelas->hari_nikah}}
                        </li>
                        <li>Tanggal Nikah :
                            {{$SuratLimabelas->tanggal_nikah}}
                        </li>
                        <li>Jam Nikah :
                            {{$SuratLimabelas->jam_nikah}}
                        </li>
                        <li>Tempat Nikah :
                            {{$SuratLimabelas->tempat_nikah}}
                        </li>
                        <li>Surat Keterangan Kematian Suami :
                            {{$SuratLimabelas->berkas_tambahan_1}}
                        </li>
                        <li>Nama Suami :
                            {{$SuratLimabelas->nama_suami}}
                        </li>
                        <li>Nik Suami :
                            {{$SuratLimabelas->nik_suami}}
                        </li>
                        <li>Tanggal Meninggal Suami :
                            {{$SuratLimabelas->tanggal_meninggal_suami}}
                        </li>
                        <li>Tempat Meninggal Suami :
                            {{$SuratLimabelas->tempat_meninggal_suami}}
                        </li>
                        <li>Surat Keterangan Kematian Istri :
                            {{$SuratLimabelas->berkas_tambahan_2}}
                        </li>
                        <li>Nama Istri :
                            {{$SuratLimabelas->nama_istri}}
                        </li>
                        <li>Nik Istri :
                            {{$SuratLimabelas->nik_istri}}
                        </li>
                        <li>Tanggal Meninggal Istri :
                            {{$SuratLimabelas->tanggal_meninggal_istri}}
                        </li>
                        <li>Tempat Meninggal Istri :
                            {{$SuratLimabelas->tempat_meninggal_istri}}
                        </li>
                        <li>Surat Keterangan Pencatatan Isbat :
                            {{$SuratLimabelas->berkas_tambahan_3}}
                        </li>
                        <li>Tanggal Penetapan :
                            {{$SuratLimabelas->tanggal_penetapan}}
                        </li>
                        <li>Pengadilan Agama :
                            {{$SuratLimabelas->pengadilan_agama}}
                        </li>

                        <li>Surat Keterangan Penanaman Pohon :
                            {{$SuratLimabelas->berkas_tambahan_4}}
                        </li>
                        <li>Jenis Pohon :
                            {{$SuratLimabelas->jenis_pohon}}
                        </li>
                        <li>Lokasi Pohon :
                            {{$SuratLimabelas->lokasi_pohon}}
                        </li>
                        <li>Jumlah Pohon :
                            {{$SuratLimabelas->jumlah_pohon}}
                        </li>
                        <li>No HP :
                            {{$SuratLimabelas->no_hp}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>










    </body>
</html>