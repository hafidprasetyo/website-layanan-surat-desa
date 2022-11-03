<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../assets/img/PIP.png"/>
        <!-- Tell the browser to be responsive to screen width -->
        <meta
            content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
            name="viewport">
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link
            rel="stylesheet"
            href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of
        downloading all of them to reduce the load. -->
        <link
            rel="stylesheet"
            href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css">
        <!-- Google Font -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <!--Boostrap Css-->
        <link href="../laravel/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <title>Layanan Surat Desa Grujugan</title>
    </head>
    <body class="bg-light text-dark">
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-1 bg-body rounded">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('user.index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('userlte.contact') }}">Kontak</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Tentang</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        </header>
        <div class="container pt-4 ">
            <div class="row">
                <div class="col-md-8 col-xl-6">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 mr-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div class="mr-2">
                Harap Isi Formulir Dengan Data Yang Benar !!!
                </div>
            </div>
            @if($errors->any())
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 mr-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div class="mr-2">
                    <ul>
                        @foreach($errors->all() as $msg)
                        <li>{{ $msg }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
                <h3>Surat Keterangan Untuk Menikah</h3>
                    <hr>
                    
<!--Data Pasangan Pria-->
                    <button type="button" class="btn btn-secondary" disabled>Data Calon Pasangan Pria</button>
                    <form action="{{ route('SuratLimabelas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="data_pria_wargadesa">Data Calon Pasangan Pria</label>
                            <select class="form-control" name="data_pria_wargadesa" id="data_pria_wargadesa">
                            <option disabled selected>-- Data Calon Pasangan Pria --</option>
                                <option
                                    value="WARGA_DESA"
                                    {{ old('data_pria_wargadesa')=='WARGA_DESA' ? 'selected': '' }}>
                                   Warga Desa
                                </option>
                                <option
                                    value="LUAR_DESA"
                                    {{ old('data_pria_wargadesa')=='LUAR_DESA' ? 'selected': '' }}>
                                    Warga Luar Desa
                                </option>
                            </select>
                            @error('data_pria_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_data_pria_wargadesa" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_pria_wargadesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_pria_wargadesa') is-invalid @enderror"
                                        id="nik_pria_wargadesa"
                                        name="nik_pria_wargadesa"
                                        placeholder="Nik Pasangan Pria"
                                        value="{{ old('nik_pria_wargadesa') }}">
                                    @error('nik_pria_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_pria_wargadesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_pria_wargadesa') is-invalid @enderror"
                                        id="nama_pria_wargadesa"
                                        name="nama_pria_wargadesa"
                                        placeholder="Nama Lengkap Pasangan Pria"
                                        value="{{ old('nama_pria_wargadesa') }}">
                                    @error('nama_pria_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="status_pria_wargadesa">Jika pria, terangkan jejaka, duda atau beristri</label>
                            <select class="form-control" name="status_pria_wargadesa" id="status_pria_wargadesa">
                            <option disabled selected>-- Pilih Status Kawin --</option>
                                <option
                                    value="JEJAKA"
                                    {{ old('status_pria_wargadesa')=='JEJAKA' ? 'selected': '' }}>
                                   Jejaka
                                </option>
                                <option
                                    value="DUDA"
                                    {{ old('status_pria_wargadesa')=='DUDA' ? 'selected': '' }}>
                                    Duda
                                </option>
                                <option
                                    value="BERISTRI"
                                    {{ old('status_pria_wargadesa')=='BERISTRI' ? 'selected': '' }}>
                                    Beristri
                                </option>
                            </select>
                            @error('status_pria_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div id="detail_status_pria_wargadesa" style="display:none;">
                            <div>
                                <label for="namaistri_pria_wargadesa">Nama Istri</label>
                                <input
                                    type="text"
                                    class="form-control @error('namaistri_pria_wargadesa') is-invalid @enderror"
                                    id="namaistri_pria_wargadesa"
                                    name="namaistri_pria_wargadesa"
                                    placeholder="Nama Istri"
                                    value="{{ old('namaistri_pria_wargadesa') }}">
                                @error('namaistri_pria_wargadesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div id="detail_status_pria_wargadesa_1" style="display:none;">
                            <div>
                                <label for="istri_ke_wargadesa">Jika beristri, istri ke</label>
                                <input
                                    type="text"
                                    class="form-control @error('istri_ke_wargadesa') is-invalid @enderror"
                                    id="istri_ke_wargadesa"
                                    name="istri_ke_wargadesa"
                                    placeholder="Istri Keberapa"
                                    value="{{ old('istri_ke_wargadesa') }}">
                                @error('istri_ke_wargadesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div id="detail_data_pria_wargadesa_1" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_pria_wargaluardesa">Nik Pria</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_pria_wargaluardesa') is-invalid @enderror"
                                        id="nik_pria_wargaluardesa"
                                        name="nik_pria_wargaluardesa"
                                        placeholder="Nik Pria Warga Luar Desa"
                                        value="{{ old('nik_pria_wargaluardesa') }}">
                                    @error('nik_pria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_pria_wargaluardesa">Nama Lengkap Pria</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_pria_wargaluardesa') is-invalid @enderror"
                                        id="nama_pria_wargaluardesa"
                                        name="nama_pria_wargaluardesa"
                                        placeholder="Nama Lengkap Pria Warga Luar Desa"
                                        value="{{ old('nama_pria_wargaluardesa') }}">
                                    @error('nama_pria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_pria_wargaluardesa">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_pria_wargaluardesa') is-invalid @enderror"
                                    id="tempat_lahir_pria_wargaluardesa"
                                    name="tempat_lahir_pria_wargaluardesa"
                                    placeholder="Tempat Lahir Pria Warga Luar Desa"
                                    value="{{ old('tempat_lahir_pria_wargaluardesa') }}">
                                @error('tempat_lahir_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_pria_wargaluardesa">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_pria_wargaluardesa') is-invalid @enderror"
                                    id="tanggal_lahir_pria_wargaluardesa"
                                    name="tanggal_lahir_pria_wargaluardesa"
                                    placeholder="Tanggal Lahir Pria Warga Luar Desa"
                                    value="{{ old('tanggal_lahir_pria_wargaluardesa') }}">
                                @error('tanggal_lahir_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_pria_wargaluardesa">Warga Negara</label>
                                <select class="form-control" name="warga_negara_pria_wargaluardesa" id="warga_negara_pria_wargaluardesa">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_pria_wargaluardesa')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_pria_wargaluardesa')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_pria_wargaluardesa')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_pria_wargaluardesa">Agama</label>
                                <select class="form-control" name="agama_pria_wargaluardesa" id="agama_pria_wargaluardesa">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_pria_wargaluardesa')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_pria_wargaluardesa')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_pria_wargaluardesa')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_pria_wargaluardesa')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_pria_wargaluardesa')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_pria_wargaluardesa')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_pria_wargaluardesa')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_pria_wargaluardesa">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_pria_wargaluardesa') is-invalid @enderror"
                                    id="pekerjaan_pria_wargaluardesa"
                                    name="pekerjaan_pria_wargaluardesa"
                                    placeholder="Pekerjaan Pria Warga Luar Desa"
                                    value="{{ old('pekerjaan_pria_wargaluardesa') }}">
                                @error('pekerjaan_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_pria_wargaluardesa">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_pria_wargaluardesa') is-invalid @enderror"
                                    id="alamat_pria_wargaluardesa"
                                    name="alamat_pria_wargaluardesa"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_pria_wargaluardesa') }}">
                                @error('alamat_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="status_pria_wargaluardesa">Jika pria, terangkan jejaka, duda atau beristri</label>
                            <select class="form-control" name="status_pria_wargaluardesa" id="status_pria_wargaluardesa">
                            <option disabled selected>-- Pilih Status Kawin --</option>
                                <option
                                    value="JEJAKA"
                                    {{ old('status_pria_wargaluardesa')=='JEJAKA' ? 'selected': '' }}>
                                   Jejaka
                                </option>
                                <option
                                    value="DUDA"
                                    {{ old('status_pria_wargaluardesa')=='DUDA' ? 'selected': '' }}>
                                    Duda
                                </option>
                                <option
                                    value="BERISTRI"
                                    {{ old('status_pria_wargaluardesa')=='BERISTRI' ? 'selected': '' }}>
                                    Beristri
                                </option>
                            </select>
                            @error('status_pria_wargaluardesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <div id="detail_status_pria_wargaluardesa" style="display:none;">
                            <div>
                                <label for="namaistri_pria_wargaluardesa">Nama Istri</label>
                                <input
                                    type="text"
                                    class="form-control @error('namaistri_pria_wargaluardesa') is-invalid @enderror"
                                    id="namaistri_pria_wargaluardesa"
                                    name="namaistri_pria_wargaluardesa"
                                    placeholder="Nama Istri"
                                    value="{{ old('namaistri_pria_wargaluardesa') }}">
                                @error('namaistri_pria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div id="detail_status_pria_wargaluardesa_1" style="display:none;">
                            <div>
                                <label for="istri_ke_wargaluardesa">Jika beristri, istri ke</label>
                                <input
                                    type="text"
                                    class="form-control @error('istri_ke_wargaluardesa') is-invalid @enderror"
                                    id="istri_ke_wargaluardesa"
                                    name="istri_ke_wargaluardesa"
                                    placeholder="Istri Keberapa"
                                    value="{{ old('istri_ke_wargaluardesa') }}">
                                @error('istri_ke_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
<!--End Data Pasangan Pria-->
<!--Data Ayah Pasangan Pria-->
                    <button type="button" class="btn btn-secondary" disabled>Data Ayah Pasangan Pria</button>
                    <div class="form-group">
                            <label for="data_ayahpria_wargadesa">Data Ayah Pasangan Pria</label>
                            <select class="form-control" name="data_ayahpria_wargadesa" id="data_ayahpria_wargadesa">
                            <option disabled selected>-- Data Ayah Pasangan Pria --</option>
                                <option
                                    value="WARGA_DESA"
                                    {{ old('data_ayahpria_wargadesa')=='WARGA_DESA' ? 'selected': '' }}>
                                   Warga Desa
                                </option>
                                <option
                                    value="LUAR_DESA"
                                    {{ old('data_ayahpria_wargadesa')=='LUAR_DESA' ? 'selected': '' }}>
                                    Warga Luar Desa
                                </option>
                            </select>
                            @error('data_ayahpria_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_data_ayahpria_wargadesa" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ayahpria_wargadesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ayahpria_wargadesa') is-invalid @enderror"
                                        id="nik_ayahpria_wargadesa"
                                        name="nik_ayahpria_wargadesa"
                                        placeholder="Nik Ayah Pria Warga Desa"
                                        value="{{ old('nik_ayahpria_wargadesa') }}">
                                    @error('nik_ayahpria_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ayahpria_wargadesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ayahpria_wargadesa') is-invalid @enderror"
                                        id="nama_ayahpria_wargadesa"
                                        name="nama_ayahpria_wargadesa"
                                        placeholder="Nama Ayah Pria Warga Desa"
                                        value="{{ old('nama_ayahpria_wargadesa') }}">
                                    @error('nama_ayahpria_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="detail_data_ayahpria_wargadesa_1" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ayahpria_wargaluardesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ayahpria_wargaluardesa') is-invalid @enderror"
                                        id="nik_ayahpria_wargaluardesa"
                                        name="nik_ayahpria_wargaluardesa"
                                        placeholder="Nik Ayah Pria Warga Luar Desa"
                                        value="{{ old('nik_ayahpria_wargaluardesa') }}">
                                    @error('nik_ayahpria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="bin_ayahpria_wargaluardesa">Bin</label>
                                    <input
                                        type="text"
                                        class="form-control @error('bin_ayahpria_wargaluardesa') is-invalid @enderror"
                                        id="bin_ayahpria_wargaluardesa"
                                        name="bin_ayahpria_wargaluardesa"
                                        placeholder="Bin Ayah Pria"
                                        value="{{ old('bin_ayahpria_wargaluardesa') }}">
                                    @error('bin_ayahpria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ayahpria_wargaluardesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ayahpria_wargaluardesa') is-invalid @enderror"
                                        id="nama_ayahpria_wargaluardesa"
                                        name="nama_ayahpria_wargaluardesa"
                                        placeholder="Nama Ayah Pria Warga Luar Desa"
                                        value="{{ old('nama_ayahpria_wargaluardesa') }}">
                                    @error('nama_ayahpria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_ayahpria_wargaluardesa">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_ayahpria_wargaluardesa') is-invalid @enderror"
                                    id="tempat_lahir_ayahpria_wargaluardesa"
                                    name="tempat_lahir_ayahpria_wargaluardesa"
                                    placeholder="Tempat Lahir Ayah Pria Warga Luar Desa"
                                    value="{{ old('tempat_lahir_ayahpria_wargaluardesa') }}">
                                @error('tempat_lahir_ayahpria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_ayahpria_wargaluardesa">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_ayahpria_wargaluardesa') is-invalid @enderror"
                                    id="tanggal_lahir_ayahpria_wargaluardesa"
                                    name="tanggal_lahir_ayahpria_wargaluardesa"
                                    placeholder="Tanggal Lahir Ayah Pria Warga Luar Desa"
                                    value="{{ old('tanggal_lahir_ayahpria_wargaluardesa') }}">
                                @error('tanggal_lahir_ayahpria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_ayahpria_wargaluardesa">Warga Negara</label>
                                <select class="form-control" name="warga_negara_ayahpria_wargaluardesa" id="warga_negara_ayahpria_wargaluardesa">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_ayahpria_wargaluardesa')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_ayahpria_wargaluardesa')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_ayahpria_wargaluardesa')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_ayahpria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_ayahpria_wargaluardesa">Agama</label>
                                <select class="form-control" name="agama_ayahpria_wargaluardesa" id="agama_ayahpria_wargaluardesa">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_ayahpria_wargaluardesa')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_ayahpria_wargaluardesa')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_ayahpria_wargaluardesa')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_ayahpria_wargaluardesa')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_ayahpria_wargaluardesa')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_ayahpria_wargaluardesa')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_ayahpria_wargaluardesa')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_ayahpria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_ayahpria_wargaluardesa">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_ayahpria_wargaluardesa') is-invalid @enderror"
                                    id="pekerjaan_ayahpria_wargaluardesa"
                                    name="pekerjaan_ayahpria_wargaluardesa"
                                    placeholder="Pekerjaan Ayah Pria Warga Luar Desa"
                                    value="{{ old('pekerjaan_ayahpria_wargaluardesa') }}">
                                @error('pekerjaan_ayahpria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_ayahpria_wargaluardesa">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_ayahpria_wargaluardesa') is-invalid @enderror"
                                    id="alamat_ayahpria_wargaluardesa"
                                    name="alamat_ayahpria_wargaluardesa"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_ayahpria_wargaluardesa') }}">
                                @error('alamat_ayahpria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<!-- End Data Ayah Pasangan Pria-->                   
<!--Data Ibu Pasangan Pria-->
                        <button type="button" class="btn btn-secondary" disabled>Data Ibu Pasangan Pria</button>
                        <div class="form-group">
                            <label for="data_ibupria_wargadesa">Data Ibu Pasangan Pria</label>
                            <select class="form-control" name="data_ibupria_wargadesa" id="data_ibupria_wargadesa">
                            <option disabled selected>-- Data Ibu Pasangan Pria --</option>
                                <option
                                    value="WARGA_DESA"
                                    {{ old('data_ibupria_wargadesa')=='WARGA_DESA' ? 'selected': '' }}>
                                   Warga Desa
                                </option>
                                <option
                                    value="LUAR_DESA"
                                    {{ old('data_ibupria_wargadesa')=='LUAR_DESA' ? 'selected': '' }}>
                                    Warga Luar Desa
                                </option>
                            </select>
                            @error('data_ibupria_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_data_ibupria_wargadesa" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ibupria_wargadesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ibupria_wargadesa') is-invalid @enderror"
                                        id="nik_ibupria_wargadesa"
                                        name="nik_ibupria_wargadesa"
                                        placeholder="Nik Ibu Pria Warga Desa"
                                        value="{{ old('nik_ibupria_wargadesa') }}">
                                    @error('nik_ibupria_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ibupria_wargadesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ibupria_wargadesa') is-invalid @enderror"
                                        id="nama_ibupria_wargadesa"
                                        name="nama_ibupria_wargadesa"
                                        placeholder="Nama Ibu Pria Warga Desa"
                                        value="{{ old('nama_ibupria_wargadesa') }}">
                                    @error('nama_ibupria_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="detail_data_ibupria_wargadesa_1" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ibupria_wargaluardesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ibupria_wargaluardesa') is-invalid @enderror"
                                        id="nik_ibupria_wargaluardesa"
                                        name="nik_ibupria_wargaluardesa"
                                        placeholder="Nik Ibu Pria Warga Luar Desa"
                                        value="{{ old('nik_ibupria_wargaluardesa') }}">
                                    @error('nik_ibupria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="binti_ibupria_wargaluardesa">Binti</label>
                                    <input
                                        type="text"
                                        class="form-control @error('binti_ibupria_wargaluardesa') is-invalid @enderror"
                                        id="binti_ibupria_wargaluardesa"
                                        name="binti_ibupria_wargaluardesa"
                                        placeholder="Binti Ibu Pria"
                                        value="{{ old('binti_ibupria_wargaluardesa') }}">
                                    @error('binti_ibupria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ibupria_wargaluardesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ibupria_wargaluardesa') is-invalid @enderror"
                                        id="nama_ibupria_wargaluardesa"
                                        name="nama_ibupria_wargaluardesa"
                                        placeholder="Nama Ibu Pria Warga Luar Desa"
                                        value="{{ old('nama_ibupria_wargaluardesa') }}">
                                    @error('nama_ibupria_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_ibupria_wargaluardesa">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_ibupria_wargaluardesa') is-invalid @enderror"
                                    id="tempat_lahir_ibupria_wargaluardesa"
                                    name="tempat_lahir_ibupria_wargaluardesa"
                                    placeholder="Tempat Lahir Ibu Pria Warga Luar Desa"
                                    value="{{ old('tempat_lahir_ibupria_wargaluardesa') }}">
                                @error('tempat_lahir_ibupria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_ibupria_wargaluardesa">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_ibupria_wargaluardesa') is-invalid @enderror"
                                    id="tanggal_lahir_ibupria_wargaluardesa"
                                    name="tanggal_lahir_ibupria_wargaluardesa"
                                    placeholder="Tanggal Lahir Ibu Pria Warga Luar Desa"
                                    value="{{ old('tanggal_lahir_ibupria_wargaluardesa') }}">
                                @error('tanggal_lahir_ibupria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_ibupria_wargaluardesa">Warga Negara</label>
                                <select class="form-control" name="warga_negara_ibupria_wargaluardesa" id="warga_negara_ibupria_wargaluardesa">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_ibupria_wargaluardesa')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_ibupria_wargaluardesa')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_ibupria_wargaluardesa')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_ibupria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_ibupria_wargaluardesa">Agama</label>
                                <select class="form-control" name="agama_ibupria_wargaluardesa" id="agama_ibupria_wargaluardesa">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_ibupria_wargaluardesa')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_ibupria_wargaluardesa')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_ibupria_wargaluardesa')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_ibupria_wargaluardesa')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_ibupria_wargaluardesa')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_ibupria_wargaluardesa')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_ibupria_wargaluardesa')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_ibupria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_ibupria_wargaluardesa">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_ibupria_wargaluardesa') is-invalid @enderror"
                                    id="pekerjaan_ibupria_wargaluardesa"
                                    name="pekerjaan_ibupria_wargaluardesa"
                                    placeholder="Pekerjaan Ibu Pria Warga Luar Desa"
                                    value="{{ old('pekerjaan_ibupria_wargaluardesa') }}">
                                @error('pekerjaan_ibupria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_ibupria_wargaluardesa">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_ibupria_wargaluardesa') is-invalid @enderror"
                                    id="alamat_ibupria_wargaluardesa"
                                    name="alamat_ibupria_wargaluardesa"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_ibupria_wargaluardesa') }}">
                                @error('alamat_ibupria_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<!--End Data Ibu Pria Pasangan Pria-->
<!--Data Pasangan Wanita-->
                        <button type="button" class="btn btn-secondary" disabled>Data Calon Pasangan Wanita</button>
                        <div class="form-group">
                            <label for="data_wanita_wargadesa">Data Calon Pasangan Wanita</label>
                            <select class="form-control" name="data_wanita_wargadesa" id="data_wanita_wargadesa">
                            <option disabled selected>-- Data Calon Pasangan Wanita --</option>
                                <option
                                    value="WARGA_DESA"
                                    {{ old('data_wanita_wargadesa')=='WARGA_DESA' ? 'selected': '' }}>
                                   Warga Desa
                                </option>
                                <option
                                    value="LUAR_DESA"
                                    {{ old('data_wanita_wargadesa')=='LUAR_DESA' ? 'selected': '' }}>
                                    Warga Luar Desa
                                </option>
                            </select>
                            @error('data_wanita_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_data_wanita_wargadesa" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_wanita_wargadesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_wanita_wargadesa') is-invalid @enderror"
                                        id="nik_wanita_wargadesa"
                                        name="nik_wanita_wargadesa"
                                        placeholder="Nik Pasangan Wanita"
                                        value="{{ old('nik_wanita_wargadesa') }}">
                                    @error('nik_wanita_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_wanita_wargadesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_wanita_wargadesa') is-invalid @enderror"
                                        id="nama_wanita_wargadesa"
                                        name="nama_wanita_wargadesa"
                                        placeholder="Nama Lengkap Pasangan Wanita"
                                        value="{{ old('nama_wanita_wargadesa') }}">
                                    @error('nama_wanita_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="status_wanita_wargadesa">Jika wanita, terangkan perawan atau janda</label>
                            <select class="form-control" name="status_wanita_wargadesa" id="status_wanita_wargadesa">
                            <option disabled selected>-- Pilih Status Kawin --</option>
                                <option
                                    value="PERAWAN"
                                    {{ old('status_wanita_wargadesa')=='PERAWAN' ? 'selected': '' }}>
                                   PERAWAN
                                </option>
                                <option
                                    value="JANDA"
                                    {{ old('status_wanita_wargadesa')=='JANDA' ? 'selected': '' }}>
                                    JANDA
                                </option>
                            </select>
                            @error('status_wanita_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div id="detail_data_wanita_wargadesa_1" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_wanita_wargaluardesa">Nik Wanita</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_wanita_wargaluardesa') is-invalid @enderror"
                                        id="nik_wanita_wargaluardesa"
                                        name="nik_wanita_wargaluardesa"
                                        placeholder="Nik Wanita Warga Luar Desa"
                                        value="{{ old('nik_wanita_wargaluardesa') }}">
                                    @error('nik_wanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_wanita_wargaluardesa">Nama Lengkap Wanita</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_wanita_wargaluardesa') is-invalid @enderror"
                                        id="nama_wanita_wargaluardesa"
                                        name="nama_wanita_wargaluardesa"
                                        placeholder="Nama Lengkap Wanita Warga Luar Desa"
                                        value="{{ old('nama_wanita_wargaluardesa') }}">
                                    @error('nama_wanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_wanita_wargaluardesa">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_wanita_wargaluardesa') is-invalid @enderror"
                                    id="tempat_lahir_wanita_wargaluardesa"
                                    name="tempat_lahir_wanita_wargaluardesa"
                                    placeholder="Tempat Lahir Wanita Warga Luar Desa"
                                    value="{{ old('tempat_lahir_wanita_wargaluardesa') }}">
                                @error('tempat_lahir_wanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_wanita_wargaluardesa">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_wanita_wargaluardesa') is-invalid @enderror"
                                    id="tanggal_lahir_wanita_wargaluardesa"
                                    name="tanggal_lahir_wanita_wargaluardesa"
                                    placeholder="Tanggal Lahir Wanita Warga Luar Desa"
                                    value="{{ old('tanggal_lahir_wanita_wargaluardesa') }}">
                                @error('tanggal_lahir_wanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_wanita_wargaluardesa">Warga Negara</label>
                                <select class="form-control" name="warga_negara_wanita_wargaluardesa" id="warga_negara_wanita_wargaluardesa">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_wanita_wargaluardesa')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_wanita_wargaluardesa')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_wanita_wargaluardesa')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_wanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_wanita_wargaluardesa">Agama</label>
                                <select class="form-control" name="agama_wanita_wargaluardesa" id="agama_wanita_wargaluardesa">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_wanita_wargaluardesa')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_wanita_wargaluardesa')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_wanita_wargaluardesa')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_wanita_wargaluardesa')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_wanita_wargaluardesa')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_wanita_wargaluardesa')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_wanita_wargaluardesa')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_wanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_wanita_wargaluardesa">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_wanita_wargaluardesa') is-invalid @enderror"
                                    id="pekerjaan_wanita_wargaluardesa"
                                    name="pekerjaan_wanita_wargaluardesa"
                                    placeholder="Pekerjaan Wanita Warga Luar Desa"
                                    value="{{ old('pekerjaan_wanita_wargaluardesa') }}">
                                @error('pekerjaan_wanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_wanita_wargaluardesa">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_wanita_wargaluardesa') is-invalid @enderror"
                                    id="alamat_wanita_wargaluardesa"
                                    name="alamat_wanita_wargaluardesa"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_wanita_wargaluardesa') }}">
                                @error('alamat_wanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="status_wanita_wargaluardesa">Jika wanita, terangkan perawan atau janda</label>
                            <select class="form-control" name="status_wanita_wargaluardesa" id="status_wanita_wargaluardesa">
                            <option disabled selected>-- Pilih Status Kawin --</option>
                                <option
                                    value="PERAWAN"
                                    {{ old('status_wanita_wargaluardesa')=='PERAWAN' ? 'selected': '' }}>
                                   PERAWAN
                                </option>
                                <option
                                    value="JANDA"
                                    {{ old('status_wanita_wargaluardesa')=='JANDA' ? 'selected': '' }}>
                                    JANDA
                                </option>
                            </select>
                            @error('status_wanita_wargaluardesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
<!--End Data Pasangan Wanita-->                 
<!--Data Ayah Pasangan Wanita-->
                        <button type="button" class="btn btn-secondary" disabled>Data Ayah Pasangan Wanita</button>
                        <div class="form-group">
                            <label for="data_ayahwanita_wargadesa">Data Ayah Pasangan Wanita</label>
                            <select class="form-control" name="data_ayahwanita_wargadesa" id="data_ayahwanita_wargadesa">
                            <option disabled selected>-- Data Ayah Pasangan Wanita --</option>
                                <option
                                    value="WARGA_DESA"
                                    {{ old('data_ayahwanita_wargadesa')=='WARGA_DESA' ? 'selected': '' }}>
                                   Warga Desa
                                </option>
                                <option
                                    value="LUAR_DESA"
                                    {{ old('data_ayahwanita_wargadesa')=='LUAR_DESA' ? 'selected': '' }}>
                                    Warga Luar Desa
                                </option>
                            </select>
                            @error('data_ayahwanita_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_data_ayahwanita_wargadesa" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ayahwanita_wargadesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ayahwanita_wargadesa') is-invalid @enderror"
                                        id="nik_ayahwanita_wargadesa"
                                        name="nik_ayahwanita_wargadesa"
                                        placeholder="Nik Ayah Wanita Warga Desa"
                                        value="{{ old('nik_ayahwanita_wargadesa') }}">
                                    @error('nik_ayahwanita_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ayahwanita_wargadesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ayahwanita_wargadesa') is-invalid @enderror"
                                        id="nama_ayahwanita_wargadesa"
                                        name="nama_ayahwanita_wargadesa"
                                        placeholder="Nama Ayah Wanita Warga Desa"
                                        value="{{ old('nama_ayahwanita_wargadesa') }}">
                                    @error('nama_ayahwanita_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="detail_data_ayahwanita_wargadesa_1" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ayahwanita_wargaluardesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ayahwanita_wargaluardesa') is-invalid @enderror"
                                        id="nik_ayahwanita_wargaluardesa"
                                        name="nik_ayahwanita_wargaluardesa"
                                        placeholder="Nik Ayah Wanita Warga Luar Desa"
                                        value="{{ old('nik_ayahwanita_wargaluardesa') }}">
                                    @error('nik_ayahwanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="bin_ayahwanita_wargaluardesa">Bin</label>
                                    <input
                                        type="text"
                                        class="form-control @error('bin_ayahwanita_wargaluardesa') is-invalid @enderror"
                                        id="bin_ayahwanita_wargaluardesa"
                                        name="bin_ayahwanita_wargaluardesa"
                                        placeholder="Bin Ayah Wanita"
                                        value="{{ old('bin_ayahwanita_wargaluardesa') }}">
                                    @error('bin_ayahwanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ayahwanita_wargaluardesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ayahwanita_wargaluardesa') is-invalid @enderror"
                                        id="nama_ayahwanita_wargaluardesa"
                                        name="nama_ayahwanita_wargaluardesa"
                                        placeholder="Nama Ayah Wanita Warga Luar Desa"
                                        value="{{ old('nama_ayahwanita_wargaluardesa') }}">
                                    @error('nama_ayahwanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_ayahwanita_wargaluardesa">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_ayahwanita_wargaluardesa') is-invalid @enderror"
                                    id="tempat_lahir_ayahwanita_wargaluardesa"
                                    name="tempat_lahir_ayahwanita_wargaluardesa"
                                    placeholder="Tempat Lahir Ayah Wanita Warga Luar Desa"
                                    value="{{ old('tempat_lahir_ayahwanita_wargaluardesa') }}">
                                @error('tempat_lahir_ayahwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_ayahwanita_wargaluardesa">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_ayahwanita_wargaluardesa') is-invalid @enderror"
                                    id="tanggal_lahir_ayahwanita_wargaluardesa"
                                    name="tanggal_lahir_ayahwanita_wargaluardesa"
                                    placeholder="Tanggal Lahir Ayah Wanita Warga Luar Desa"
                                    value="{{ old('tanggal_lahir_ayahwanita_wargaluardesa') }}">
                                @error('tanggal_lahir_ayahwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_ayahwanita_wargaluardesa">Warga Negara</label>
                                <select class="form-control" name="warga_negara_ayahwanita_wargaluardesa" id="warga_negara_ayahwanita_wargaluardesa">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_ayahwanita_wargaluardesa')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_ayahwanita_wargaluardesa')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_ayahwanita_wargaluardesa')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_ayahwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_ayahwanita_wargaluardesa">Agama</label>
                                <select class="form-control" name="agama_ayahwanita_wargaluardesa" id="agama_ayahwanita_wargaluardesa">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_ayahwanita_wargaluardesa')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_ayahwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_ayahwanita_wargaluardesa">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_ayahwanita_wargaluardesa') is-invalid @enderror"
                                    id="pekerjaan_ayahwanita_wargaluardesa"
                                    name="pekerjaan_ayahwanita_wargaluardesa"
                                    placeholder="Pekerjaan Ayah Wanita Warga Luar Desa"
                                    value="{{ old('pekerjaan_ayahwanita_wargaluardesa') }}">
                                @error('pekerjaan_ayahwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_ayahwanita_wargaluardesa">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_ayahwanita_wargaluardesa') is-invalid @enderror"
                                    id="alamat_ayahwanita_wargaluardesa"
                                    name="alamat_ayahwanita_wargaluardesa"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_ayahwanita_wargaluardesa') }}">
                                @error('alamat_ayahwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<!--End Data Ayah  Pasangan Wanita-->                    
<!--Data Ibu Pasangan Wanita-->
                        <button type="button" class="btn btn-secondary" disabled>Data Ibu Pasangan Wanita</button>
                        <div class="form-group">
                            <label for="data_ibuwanita_wargadesa">Data Ibu Pasangan Wanita</label>
                            <select class="form-control" name="data_ibuwanita_wargadesa" id="data_ibuwanita_wargadesa">
                            <option disabled selected>-- Data Ibu Pasangan Wanita --</option>
                                <option
                                    value="WARGA_DESA"
                                    {{ old('data_ibuwanita_wargadesa')=='WARGA_DESA' ? 'selected': '' }}>
                                   Warga Desa
                                </option>
                                <option
                                    value="LUAR_DESA"
                                    {{ old('data_ibuwanita_wargadesa')=='LUAR_DESA' ? 'selected': '' }}>
                                    Warga Luar Desa
                                </option>
                            </select>
                            @error('data_ibuwanita_wargadesa')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_data_ibuwanita_wargadesa" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ibuwanita_wargadesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ibuwanita_wargadesa') is-invalid @enderror"
                                        id="nik_ibuwanita_wargadesa"
                                        name="nik_ibuwanita_wargadesa"
                                        placeholder="Nik Ibu Wanita Warga Desa"
                                        value="{{ old('nik_ibuwanita_wargadesa') }}">
                                    @error('nik_ibuwanita_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ibuwanita_wargadesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ibuwanita_wargadesa') is-invalid @enderror"
                                        id="nama_ibuwanita_wargadesa"
                                        name="nama_ibuwanita_wargadesa"
                                        placeholder="Nama Ibu Wanita Warga Desa"
                                        value="{{ old('nama_ibuwanita_wargadesa') }}">
                                    @error('nama_ibuwanita_wargadesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="detail_data_ibuwanita_wargadesa_1" style="display:none;">
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_ibuwanita_wargaluardesa">Nik</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_ibuwanita_wargaluardesa') is-invalid @enderror"
                                        id="nik_ibuwanita_wargaluardesa"
                                        name="nik_ibuwanita_wargaluardesa"
                                        placeholder="Nik Ibu Wanita Warga Luar Desa"
                                        value="{{ old('nik_ibuwanita_wargaluardesa') }}">
                                    @error('nik_ibuwanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="binti_ibuwanita_wargaluardesa">Binti</label>
                                    <input
                                        type="text"
                                        class="form-control @error('binti_ibuwanita_wargaluardesa') is-invalid @enderror"
                                        id="binti_ibuwanita_wargaluardesa"
                                        name="binti_ibuwanita_wargaluardesa"
                                        placeholder="Binti Ibu Wanita"
                                        value="{{ old('binti_ibuwanita_wargaluardesa') }}">
                                    @error('binti_ibuwanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_ibuwanita_wargaluardesa">Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_ibuwanita_wargaluardesa') is-invalid @enderror"
                                        id="nama_ibuwanita_wargaluardesa"
                                        name="nama_ibuwanita_wargaluardesa"
                                        placeholder="Nama Ibu Wanita Warga Luar Desa"
                                        value="{{ old('nama_ibuwanita_wargaluardesa') }}">
                                    @error('nama_ibuwanita_wargaluardesa')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_ibuwanita_wargaluardesa">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_ibuwanita_wargaluardesa') is-invalid @enderror"
                                    id="tempat_lahir_ibuwanita_wargaluardesa"
                                    name="tempat_lahir_ibuwanita_wargaluardesa"
                                    placeholder="Tempat Lahir Ibu Wanita Warga Luar Desa"
                                    value="{{ old('tempat_lahir_ibuwanita_wargaluardesa') }}">
                                @error('tempat_lahir_ibuwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_ibuwanita_wargaluardesa">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_ibuwanita_wargaluardesa') is-invalid @enderror"
                                    id="tanggal_lahir_ibuwanita_wargaluardesa"
                                    name="tanggal_lahir_ibuwanita_wargaluardesa"
                                    placeholder="Tanggal Lahir Ibu Wanita Warga Luar Desa"
                                    value="{{ old('tanggal_lahir_ibuwanita_wargaluardesa') }}">
                                @error('tanggal_lahir_ibuwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_ibuwanita_wargaluardesa">Warga Negara</label>
                                <select class="form-control" name="warga_negara_ibuwanita_wargaluardesa" id="warga_negara_ibuwanita_wargaluardesa">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_ibuwanita_wargaluardesa')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_ibuwanita_wargaluardesa')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_ibuwanita_wargaluardesa')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_ibuwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_ibuwanita_wargaluardesa">Agama</label>
                                <select class="form-control" name="agama_ibuwanita_wargaluardesa" id="agama_ibuwanita_wargaluardesa">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_ibuwanita_wargaluardesa')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_ibuwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_ibuwanita_wargaluardesa">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_ibuwanita_wargaluardesa') is-invalid @enderror"
                                    id="pekerjaan_ibuwanita_wargaluardesa"
                                    name="pekerjaan_ibuwanita_wargaluardesa"
                                    placeholder="Pekerjaan Ibu Wanita Warga Luar Desa"
                                    value="{{ old('pekerjaan_ibuwanita_wargaluardesa') }}">
                                @error('pekerjaan_ibuwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_ibuwanita_wargaluardesa">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_ibuwanita_wargaluardesa') is-invalid @enderror"
                                    id="alamat_ibuwanita_wargaluardesa"
                                    name="alamat_ibuwanita_wargaluardesa"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_ibuwanita_wargaluardesa') }}">
                                @error('alamat_ibuwanita_wargaluardesa')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<!--End data ibu pasangan wanita-->
<!--Data Wali Nikah-->
                        <button type="button" class="btn btn-secondary" disabled>Data Wali Nikah</button>
                            <div class="row">
                                <div class = "col">
                                    <label for="nik_walinikah">Nik </label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_walinikah') is-invalid @enderror"
                                        id="nik_walinikah"
                                        name="nik_walinikah"
                                        placeholder="Nik Wali Nikah"
                                        value="{{ old('nik_walinikah') }}">
                                    @error('nik_walinikah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="bin_walinikah">Bin</label>
                                    <input
                                        type="text"
                                        class="form-control @error('bin_walinikah') is-invalid @enderror"
                                        id="bin_walinikah"
                                        name="bin_walinikah"
                                        placeholder="Bin"
                                        value="{{ old('bin_walinikah') }}">
                                    @error('bin_walinikah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="nama_walinikah">Nama</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_walinikah') is-invalid @enderror"
                                        id="nama_walinikah"
                                        name="nama_walinikah"
                                        placeholder="Nama Wali Nikah"
                                        value="{{ old('nama_walinikah') }}">
                                    @error('nama_walinikah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir_walinikah">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir_walinikah') is-invalid @enderror"
                                    id="tempat_lahir_walinikah"
                                    name="tempat_lahir_walinikah"
                                    placeholder="Tempat Lahir "
                                    value="{{ old('tempat_lahir_walinikah') }}">
                                @error('tempat_lahir_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir_walinikah">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir_walinikah') is-invalid @enderror"
                                    id="tanggal_lahir_walinikah"
                                    name="tanggal_lahir_walinikah"
                                    placeholder="Tanggal Lahir"
                                    value="{{ old('tanggal_lahir_walinikah') }}">
                                @error('tanggal_lahir_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="warga_negara_walinikah">Warga Negara</label>
                                <select class="form-control" name="warga_negara_walinikah" id="warga_negara_walinikah">
                                <option disabled selected>-- Pilih Warga Negara --</option>
                                    <option
                                        value="WNI"
                                        {{ old('warga_negara_walinikah')=='WNI' ? 'selected': '' }}>
                                    WNI
                                    </option>
                                    <option
                                        value="WNA"
                                        {{ old('warga_negara_walinikah')=='WNA' ? 'selected': '' }}>
                                    WNA
                                    </option>
                                    <option
                                        value="DUA_KEWARGANEGARAAN"
                                        {{ old('warga_negara_walinikah')=='DUA_KEWARGANEGARAAN' ? 'selected': '' }}>
                                    DUA KEWARGANEGARAAN
                                    </option>
                                </select>
                                @error('warga_negara_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="agama_walinikah">Agama</label>
                                <select class="form-control" name="agama_walinikah" id="agama_walinikah">
                                <option disabled selected>-- Pilih Agama --</option>
                                    <option
                                        value="ISLAM"
                                        {{ old('agama_walinikah')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                    </option>
                                    <option
                                        value="KRISTEN"
                                        {{ old('agama_walinikah')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                    </option>
                                    <option
                                        value="KATHOLIK"
                                        {{ old('agama_walinikah')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                    </option>
                                    <option
                                        value="HINDU"
                                        {{ old('agama_walinikah')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                    </option>
                                    <option
                                        value="BUDHA"
                                        {{ old('agama_walinikah')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                    </option>
                                    <option
                                        value="KHONGHUCU"
                                        {{ old('agama_walinikah')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                    </option>
                                    <option
                                        value="Kepercayaan_Terhadap_Tuhan_YME/Lainnya"
                                        {{ old('agama_walinikah')=='Kepercayaan_Terhadap_Tuhan_YME/Lainnya' ? 'selected': '' }}>
                                    Kepercayaan Terhadap Tuhan YME/Lainnya
                                    </option>
                                </select>
                                @error('agama_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="pekerjaan_walinikah">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan_walinikah') is-invalid @enderror"
                                    id="pekerjaan_walinikah"
                                    name="pekerjaan_walinikah"
                                    placeholder="Pekerjaan "
                                    value="{{ old('pekerjaan_walinikah') }}">
                                @error('pekerjaan_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div>
                                <label for="alamat_walinikah">Alamat</label>
                                <input
                                    type="text"
                                    class="form-control @error('alamat_walinikah') is-invalid @enderror"
                                    id="alamat_walinikah"
                                    name="alamat_walinikah"
                                    placeholder="Alamat"
                                    value="{{ old('alamat_walinikah') }}">
                                @error('alamat_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="hubungan_walinikah">Hubungan dengan Wali</label>
                                <input
                                    type="text"
                                    class="form-control @error('hubungan_walinikah') is-invalid @enderror"
                                    id="hubungan_walinikah"
                                    name="hubungan_walinikah"
                                    placeholder="Hubungan dengan wali nikah"
                                    value="{{ old('hubungan_walinikah') }}">
                                @error('hubungan_walinikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
<!--End data wali nikah-->
<!--Data Pernikahan-->
                        <button type="button" class="btn btn-secondary mt-3" disabled>Data Pernikahan</button>
                            <div class="row">
                                <div class = "col">
                                    <label for="hari_nikah">Hari</label>
                                    <input
                                        type="text"
                                        class="form-control @error('hari_nikah') is-invalid @enderror"
                                        id="hari_nikah"
                                        name="hari_nikah"
                                        placeholder="Hari Nikah"
                                        value="{{ old('hari_nikah') }}">
                                    @error('hari_nikah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="tanggal_nikah">Tanggal</label>
                                    <input
                                        type="text"
                                        class="form-control @error('tanggal_nikah') is-invalid @enderror"
                                        id="tanggal_nikah"
                                        name="tanggal_nikah"
                                        placeholder="Tanggal-Bulan-Tahun"
                                        value="{{ old('tanggal_nikah') }}">
                                    @error('tanggal_nikah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class = "col">
                                    <label for="jam_nikah">Jam</label>
                                    <input
                                        type="text"
                                        class="form-control @error('jam_nikah') is-invalid @enderror"
                                        id="jam_nikah"
                                        name="jam_nikah"
                                        placeholder="Jam"
                                        value="{{ old('jam_nikah') }}">
                                    @error('jam_nikah')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="tempat_nikah">Tempat Pernikahan</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_nikah') is-invalid @enderror"
                                    id="tempat_nikah"
                                    name="tempat_nikah"
                                    placeholder="Tempat Nikah"
                                    value="{{ old('tempat_nikah') }}">
                                @error('tempat_nikah')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
<!--End Data Pernikahan-->
<!--Berkas Tambahan-->
                        <button type="button" class="btn btn-secondary mt-3" disabled>Berkas Tambahan</button>
                        <div class="form-group">
                            <label for="berkas_tambahan_1">Surat Keterangan Kematian Suami</label>
                            <select class="form-control" name="berkas_tambahan_1" id="berkas_tambahan_1">
                            <option disabled selected>-- Surat Keterangan Kematian Suami --</option>
                                <option
                                    value="ADA"
                                    {{ old('berkas_tambahan_1')=='ADA' ? 'selected': '' }}>
                                   ADA
                                </option>
                                <option
                                    value="TIDAK_ADA"
                                    {{ old('berkas_tambahan_1')=='TIDAK_ADA' ? 'selected': '' }}>
                                    TIDAK ADA
                                </option>
                            </select>
                            @error('berkas_tambahan_1')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_berkas_tambahan_1" style="display:none;">
                            <div class="row">
                                <div class="col">
                                    <label for="nama_suami">Nama Suami</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_suami') is-invalid @enderror"
                                        id="nama_suami"
                                        name="nama_suami"
                                        placeholder="Nama Suami"
                                        value="{{ old('nama_suami') }}">
                                    @error('nama_suami')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="nik_suami">Nik Suami</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_suami') is-invalid @enderror"
                                        id="nik_suami"
                                        name="nik_suami"
                                        placeholder="Nik Suami"
                                        value="{{ old('nik_suami') }}">
                                    @error('nik_suami')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="tanggal_meninggal_suami">Tanggal Meninggal</label>
                                    <input
                                        type="text"
                                        class="form-control @error('tanggal_meninggal_suami') is-invalid @enderror"
                                        id="tanggal_meninggal_suami"
                                        name="tanggal_meninggal_suami"
                                        placeholder="Tanggal-Bulan-Tahun"
                                        value="{{ old('tanggal_meninggal_suami') }}">
                                    @error('tanggal_meninggal_suami')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="tempat_meninggal_suami">Tempat Meninggal</label>
                                    <input
                                        type="text"
                                        class="form-control @error('tempat_meninggal_suami') is-invalid @enderror"
                                        id="tempat_meninggal_suami"
                                        name="tempat_meninggal_suami"
                                        placeholder="Tempat Meninggal"
                                        value="{{ old('tempat_meninggal_suami') }}">
                                    @error('tempat_meninggal_suami')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_tambahan_2">Surat Keterangan Kematian Istri</label>
                            <select class="form-control" name="berkas_tambahan_2" id="berkas_tambahan_2">
                            <option disabled selected>-- Surat Keterangan Kematian Istri --</option>
                                <option
                                    value="ADA"
                                    {{ old('berkas_tambahan_2')=='ADA' ? 'selected': '' }}>
                                   ADA
                                </option>
                                <option
                                    value="TIDAK_ADA"
                                    {{ old('berkas_tambahan_2')=='TIDAK_ADA' ? 'selected': '' }}>
                                    TIDAK ADA
                                </option>
                            </select>
                            @error('berkas_tambahan_2')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_berkas_tambahan_2" style="display:none;">
                            <div class="row">
                                <div class="col">
                                    <label for="nama_istri">Nama Istri</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nama_istri') is-invalid @enderror"
                                        id="nama_istri"
                                        name="nama_istri"
                                        placeholder="Nama Istri"
                                        value="{{ old('nama_istri') }}">
                                    @error('nama_istri')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="nik_istri">Nik Istri</label>
                                    <input
                                        type="text"
                                        class="form-control @error('nik_istri') is-invalid @enderror"
                                        id="nik_istri"
                                        name="nik_istri"
                                        placeholder="Nik Istri"
                                        value="{{ old('nik_istri') }}">
                                    @error('nik_istri')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="tanggal_meninggal_istri">Tanggal Meninggal</label>
                                    <input
                                        type="text"
                                        class="form-control @error('tanggal_meninggal_istri') is-invalid @enderror"
                                        id="tanggal_meninggal_istri"
                                        name="tanggal_meninggal_istri"
                                        placeholder="Tanggal-Bulan-Tahun"
                                        value="{{ old('tanggal_meninggal_istri') }}">
                                    @error('tanggal_meninggal_istri')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="tempat_meninggal_istri">Tempat Meninggal</label>
                                    <input
                                        type="text"
                                        class="form-control @error('tempat_meninggal_istri') is-invalid @enderror"
                                        id="tempat_meninggal_istri"
                                        name="tempat_meninggal_istri"
                                        placeholder="Tempat Meninggal"
                                        value="{{ old('tempat_meninggal_istri') }}">
                                    @error('tempat_meninggal_istri')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_tambahan_3">Surat Keterangan Pencatatan Isbat</label>
                            <select class="form-control" name="berkas_tambahan_3" id="berkas_tambahan_3">
                            <option disabled selected>-- Surat Keterangan Pencatatan Isbat --</option>
                                <option
                                    value="ADA"
                                    {{ old('berkas_tambahan_3')=='ADA' ? 'selected': '' }}>
                                   ADA
                                </option>
                                <option
                                    value="TIDAK_ADA"
                                    {{ old('berkas_tambahan_3')=='TIDAK_ADA' ? 'selected': '' }}>
                                    TIDAK ADA
                                </option>
                            </select>
                            @error('berkas_tambahan_3')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_berkas_tambahan_3" style="display:none;">
                            <div class="row">
                                <div class="col">
                                    <label for="tanggal_penetapan">Tanggal Penetapan</label>
                                    <input
                                        type="text"
                                        class="form-control @error('tanggal_penetapan') is-invalid @enderror"
                                        id="tanggal_penetapan"
                                        name="tanggal_penetapan"
                                        placeholder="Tanggal Penetapan"
                                        value="{{ old('tanggal_penetapan') }}">
                                    @error('tanggal_penetapan')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="pengadilan_agama">Pengadilan Agama</label>
                                    <input
                                        type="text"
                                        class="form-control @error('pengadilan_agama') is-invalid @enderror"
                                        id="pengadilan_agama"
                                        name="pengadilan_agama"
                                        placeholder="Pengadilan Agama"
                                        value="{{ old('pengadilan_agama') }}">
                                    @error('pengadilan_agama')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berkas_tambahan_4">Surat Keterangan Penanaman Pohon</label>
                            <select class="form-control" name="berkas_tambahan_4" id="berkas_tambahan_4">
                            <option disabled selected>-- Surat Keterangan Penanaman Pohon --</option>
                                <option
                                    value="ADA"
                                    {{ old('berkas_tambahan_4')=='ADA' ? 'selected': '' }}>
                                   ADA
                                </option>
                                <option
                                    value="TIDAK_ADA"
                                    {{ old('berkas_tambahan_4')=='TIDAK_ADA' ? 'selected': '' }}>
                                    TIDAK ADA
                                </option>
                            </select>
                            @error('berkas_tambahan_4')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="detail_berkas_tambahan_4" style="display:none;">
                            
                                <div>
                                    <label for="jenis_pohon">Jenis Pohon</label>
                                    <input
                                        type="text"
                                        class="form-control @error('jenis_pohon') is-invalid @enderror"
                                        id="jenis_pohon"
                                        name="jenis_pohon"
                                        placeholder="Jenis Pohon"
                                        value="{{ old('jenis_pohon') }}">
                                    @error('jenis_pohon')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="lokasi_pohon">Lokasi Penanaman</label>
                                    <input
                                        type="text"
                                        class="form-control @error('lokasi_pohon') is-invalid @enderror"
                                        id="lokasi_pohon"
                                        name="lokasi_pohon"
                                        placeholder="Lokasi Pohon"
                                        value="{{ old('lokasi_pohon') }}">
                                    @error('lokasi_pohon')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <label for="jumlah_pohon">Jumlah Pohon</label>
                                    <input
                                        type="text"
                                        class="form-control @error('jumlah_pohon') is-invalid @enderror"
                                        id="jumlah_pohon"
                                        name="jumlah_pohon"
                                        placeholder="Jumlah Pohon"
                                        value="{{ old('jumlah_pohon') }}">
                                    @error('jumlah_pohon')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
<!--End Data Berkas Tambahan-->                    
































                        
                            <div>
                                <label for="no_hp">No Hp</label>
                                <input
                                    type="text"
                                    class="form-control @error('no_hp') is-invalid @enderror"
                                    id="no_hp"
                                    name="no_hp"
                                    placeholder="No Hp Atau Whatsapp Yang Bisa Dihubungi"
                                    value="{{ old('no_hp') }}">
                                @error('no_hp')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-success mb-4 mt-3">Ajukan</button>
                    </form>
                </div>
            </div>
        </div>






















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
    
    <!-- jQuery 3 -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $
            .widget
            .bridge('uibutton', $.ui.button);
        </script>
        <!-- Sparkline -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/moment/min/moment.min.js"></script>
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/js/demo.js"></script>
    </body>
    <!--Detail data Pria Warga Desa-->
    <script>
        $(document).ready(function() {
            $('#data_pria_wargadesa').on('change', function() {
                $('#detail_data_pria_wargadesa').hide();
                if(this.value == "WARGA_DESA"){
                    $('#detail_data_pria_wargadesa').show();
                }
                $('#detail_data_pria_wargadesa_1').hide();
                if(this.value == "LUAR_DESA"){
                    $('#detail_data_pria_wargadesa_1').show();
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#status_pria_wargadesa').on('change', function() {
                $('#detail_status_pria_wargadesa').hide();
                if(this.value == "DUDA"){
                    $('#detail_status_pria_wargadesa').show();
                }
                $('#detail_status_pria_wargadesa_1').hide();
                if(this.value == "BERISTRI"){
                    $('#detail_status_pria_wargadesa_1').show();
                }
            })
        })
    </script>
    <!--Detail data Pria Luar Desa-->
    <script>
        $(document).ready(function() {
            $('#status_pria_wargaluardesa').on('change', function() {
                $('#detail_status_pria_wargaluardesa').hide();
                if(this.value == "DUDA"){
                    $('#detail_status_pria_wargaluardesa').show();
                }
                $('#detail_status_pria_wargaluardesa_1').hide();
                if(this.value == "BERISTRI"){
                    $('#detail_status_pria_wargaluardesa_1').show();
                }
            })
        })
    </script>
    <!--Detail data ayah pria-->
    <script>
        $(document).ready(function() {
            $('#data_ayahpria_wargadesa').on('change', function() {
                $('#detail_data_ayahpria_wargadesa').hide();
                if(this.value == "WARGA_DESA"){
                    $('#detail_data_ayahpria_wargadesa').show();
                }
                $('#detail_data_ayahpria_wargadesa_1').hide();
                if(this.value == "LUAR_DESA"){
                    $('#detail_data_ayahpria_wargadesa_1').show();
                }
            })
        })
    </script>
    <!--Detail data ibu pria-->
    <script>
        $(document).ready(function() {
            $('#data_ibupria_wargadesa').on('change', function() {
                $('#detail_data_ibupria_wargadesa').hide();
                if(this.value == "WARGA_DESA"){
                    $('#detail_data_ibupria_wargadesa').show();
                }
                $('#detail_data_ibupria_wargadesa_1').hide();
                if(this.value == "LUAR_DESA"){
                    $('#detail_data_ibupria_wargadesa_1').show();
                }
            })
        })
    </script>
    <!--Detail Pasangan Wanita Warga Desa-->
    <script>
        $(document).ready(function() {
            $('#data_wanita_wargadesa').on('change', function() {
                $('#detail_data_wanita_wargadesa').hide();
                if(this.value == "WARGA_DESA"){
                    $('#detail_data_wanita_wargadesa').show();
                }
                $('#detail_data_wanita_wargadesa_1').hide();
                if(this.value == "LUAR_DESA"){
                    $('#detail_data_wanita_wargadesa_1').show();
                }
            })
        })
    </script>
    <!--Detail data ayah wanita-->
    <script>
        $(document).ready(function() {
            $('#data_ayahwanita_wargadesa').on('change', function() {
                $('#detail_data_ayahwanita_wargadesa').hide();
                if(this.value == "WARGA_DESA"){
                    $('#detail_data_ayahwanita_wargadesa').show();
                }
                $('#detail_data_ayahwanita_wargadesa_1').hide();
                if(this.value == "LUAR_DESA"){
                    $('#detail_data_ayahwanita_wargadesa_1').show();
                }
            })
        })
    </script>
    <!--Detail data ibu wanita-->
    <script>
        $(document).ready(function() {
            $('#data_ibuwanita_wargadesa').on('change', function() {
                $('#detail_data_ibuwanita_wargadesa').hide();
                if(this.value == "WARGA_DESA"){
                    $('#detail_data_ibuwanita_wargadesa').show();
                }
                $('#detail_data_ibuwanita_wargadesa_1').hide();
                if(this.value == "LUAR_DESA"){
                    $('#detail_data_ibuwanita_wargadesa_1').show();
                }
            })
        })
    </script>
    <!--Detail berkas tambahan 1-->
    <script>
        $(document).ready(function() {
            $('#berkas_tambahan_1').on('change', function() {
                $('#detail_berkas_tambahan_1').hide();
                if(this.value == "ADA"){
                    $('#detail_berkas_tambahan_1').show();
                }
            })
        })
    </script>
    <!--Detail berkas tambahan 2-->
    <script>
        $(document).ready(function() {
            $('#berkas_tambahan_2').on('change', function() {
                $('#detail_berkas_tambahan_2').hide();
                if(this.value == "ADA"){
                    $('#detail_berkas_tambahan_2').show();
                }
            })
        })
    </script>
    <!--Detail berkas tambahan 3-->
    <script>
        $(document).ready(function() {
            $('#berkas_tambahan_3').on('change', function() {
                $('#detail_berkas_tambahan_3').hide();
                if(this.value == "ADA"){
                    $('#detail_berkas_tambahan_3').show();
                }
            })
        })
    </script>
    <!--Detail berkas tambahan 4-->
    <script>
        $(document).ready(function() {
            $('#berkas_tambahan_4').on('change', function() {
                $('#detail_berkas_tambahan_4').hide();
                if(this.value == "ADA"){
                    $('#detail_berkas_tambahan_4').show();
                }
            })
        })
    </script>



    <script>
        const add = document.querySelectorAll(".input-group .add_name")
        add.forEach(function(e){
            e.addEventListener('click',function(){
                let element = this.parentElement
                //console.log(element);
                let newElement = document.createElement('div')
                    newElement.classList.add('input-group','mb-3')
                    newElement.innerHTML ='<input type="text" class="form-control" placeholder="Nik dan Nama Lengkap" value="" name="anak_tanggungan[]"><button class="btn btn-danger remove_name" type="button" id="button-addon2">Hapus</button>'
                    document.getElementById('extra-name').appendChild(newElement)

                    document.querySelector('form').querySelectorAll('.remove_name').forEach(function(remove){
                        remove.addEventListener('click',function(elmClick){
                            elmClick.target.parentElement.remove()
                        })
                    })
                })
        })
    </script>
</html>