<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/img/PIP.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of
        downloading all of them to reduce the load. -->
    <link rel="stylesheet"
        href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-exclamation-triangle-fill flex-shrink-0 mr-2" viewBox="0 0 16 16" role="img"
                        aria-label="Warning:">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <div class="mr-2">
                        Harap Isi Formulir Dengan Data Yang Benar !!!
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-exclamation-triangle-fill flex-shrink-0 mr-2" viewBox="0 0 16 16"
                            role="img" aria-label="Warning:">
                            <path
                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <div class="mr-2">
                            <ul>
                                @foreach ($errors->all() as $msg)
                                    <li>{{ $msg }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <h3>Surat Pendaftaran Perpindahan Penduduk</h3>
                <hr>
                <form action="{{ route('SuratDua.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="nik">Nik</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                name="nik" placeholder="Nik Kepala Keluarga" value="{{ old('nik') }}">
                            @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" name="nama" placeholder="Nama Lengkap Kepala Keluarga"
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                                value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir"
                                value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat"
                            placeholder="Alamat Lengkap">{{ old('alamat') }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="pendidian">Pendidikan</label>
                            <input type="text" class="form-control @error('pendidikan') is-invalid @enderror"
                                id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir"
                                value="{{ old('pendidikan') }}">
                            @error('pendidikan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="warga negara">Warga Negara</label>
                            <input type="text" class="form-control @error('warga_negara') is-invalid @enderror"
                                id="warga_negara" name="warga_negara" placeholder="WNI/WNA"
                                value="{{ old('warga_negara') }}">
                            @error('warga_negara')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror"
                                id="agama" name="agama" placeholder="Agama" value="{{ old('agama') }}">
                            @error('agama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_permohonan">Jenis Permohonan</label>
                        <select class="form-control" name="jenis_permohonan" id="jenis_permohonan">
                            <option disabled selected>-- Jenis Permohonan --</option>
                            <option value="SURAT_KETERANGAN_PINDAH"
                                {{ old('jenis_permohonan') == 'SURAT_KETERANGAN_PINDAH' ? 'selected' : '' }}>
                                Surat Keterangan Pindah
                            </option>
                            <option value="SURAT_KETERANGAN_PINDAH_LUAR_NEGERI"
                                {{ old('jenis_permohonan') == 'SURAT_KETERANGAN_PINDAH_LUAR_NEGERI' ? 'selected' : '' }}>
                                Surat Keterangan Pindah Luar Negeri(SKPLN)
                            </option>
                            <option value="SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS"
                                {{ old('jenis_permohonan') == 'SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS' ? 'selected' : '' }}>
                                Surat Keterangan Tempat Tinggal(SKTT) Bagi Orang Asing Tinggal Terbatas
                            </option>
                        </select>
                        @error('jenis_permohonan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="detail_permohonan" style="display:none;">
                        <div>
                            <label for="negara_tujuan">Negara Tujuan</label>
                            <input type="text" class="form-control @error('negara_tujuan') is-invalid @enderror"
                                id="negara_tujuan" name="negara_tujuan" placeholder="Negara Tujuan"
                                value="{{ old('negara_tujuan') }}">
                            @error('negara_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="kode_negara">Kode Negara Tujuan</label>
                            <input type="text" class="form-control @error('kode_negara') is-invalid @enderror"
                                id="kode_negara" name="kode_negara" placeholder="Kode Negara Tujuan"
                                value="{{ old('kode_negara') }}">
                            @error('kode_negara')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="alamat_tujuan">Alamat Tujuan</label>
                            <input type="text" class="form-control @error('alamat_tujuan') is-invalid @enderror"
                                id="alamat_tujuan" name="alamat_tujuan" placeholder="Alamat Tujuan"
                                value="{{ old('alamat_tujuan') }}">
                            @error('alamat_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="penanggung_jawab">Penanggung Jawab</label>
                            <input type="text"
                                class="form-control @error('penanggung_jawab') is-invalid @enderror"
                                id="penanggung_jawab" name="penanggung_jawab" placeholder="Penanggung Jawab"
                                value="{{ old('penanggung_jawab') }}">
                            @error('penanggung_jawab')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="rencana_pindah">Rencana Pindah Tanggal</label>
                            <input type="text" class="form-control @error('rencana_pindah') is-invalid @enderror"
                                id="rencana_pindah" name="rencana_pindah"
                                placeholder="Rencana Pindah Tanggal(Tanggal-Bulan-Tahun)"
                                value="{{ old('rencana_pindah') }}">
                            @error('rencana_pindah')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div id="detail_permohonan_2" style="display:none;">
                        <div>
                            <label for="nama_sponsor">Nama Sponsor</label>
                            <input type="text" class="form-control @error('nama_sponsor') is-invalid @enderror"
                                id="nama_sponsor" name="nama_sponsor" placeholder="Nama Sponsor"
                                value="{{ old('nama_sponsor') }}">
                            @error('nama_sponsor')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipe_sponsor">Tipe Sponsor</label>
                            <select class="form-control" name="tipe_sponsor" id="tipe_sponsor">
                                <option disabled selected>-- Tipe Sponsor --</option>
                                <option value="Organisasi_Internasional"
                                    {{ old('tipe_sponsor') == 'Organisasi_Internasional' ? 'selected' : '' }}>
                                    Organisasi Internasional
                                </option>
                                <option value=" Pemerintah"
                                    {{ old('tipe_sponsor') == 'Pemerintah' ? 'selected' : '' }}>
                                    Pemerintah
                                </option>
                                <option value="Perusahaan" {{ old('tipe_sponsor') == 'Perusahaan' ? 'selected' : '' }}>
                                    Perusahaan
                                </option>
                                <option value="Perorangan" {{ old('tipe_sponsor') == 'Perorangan' ? 'selected' : '' }}>
                                    Perorangan
                                </option>
                                <option value="Tanpa_Sponsor"
                                    {{ old('tipe_sponsor') == 'Tanpa_Sponsor' ? 'selected' : '' }}>
                                    Tanpa Sponsor
                                </option>
                            </select>
                            @error('tipe_sponsor')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="nomor">Nomor KITAS & KITAP</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror"
                                id="nomor" name="nomor" placeholder="Nomor KITAS & KITAP"
                                value="{{ old('nomor') }}">
                            @error('nomor')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="tanggal_masa">Tanggal Masa Berlaku KITAS & KITAB</label>
                            <input type="text" class="form-control @error('tanggal_masa') is-invalid @enderror"
                                id="tanggal_masa" name="tanggal_masa"
                                placeholder="Tanggal Masa Berlaku Kitas&Kitap (Tanggal-Bulan-Tahun)"
                                value="{{ old('tanggal_masa') }}">
                            @error('tanggal_masa')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>












                    <div class="form-group">
                        <label for="lokasi_pindah">Lokasi Pindah</label>
                        <select class="form-control" name="lokasi_pindah" id="lokasi_pindah">
                            <option disabled selected>-- Lokasi Pindah --</option>
                            <option value="DALAM_SATU_DESA/KELURAHAN_YANG_DISEBUT_DENGAN_NAMA_LAIN"
                                {{ old('lokasi_pindah') == 'DALAM_SATU_DESA/KELURAHAN_YANG_DISEBUT_DENGAN_NAMA_LAIN' ? 'selected' : '' }}>
                                Dalam Satu desa/kelurahan atau yang disebut dengan nama lain
                            </option>
                            <option value="ANTAR_DESA/KELURAHAN_YANG_DISEBUT_DENGAN_NAMA_LAIN_DALAM_SUATU_KECAMATAN"
                                {{ old('lokasi_pindah') == 'ANTAR_DESA/KELURAHAN_YANG_DISEBUT_DENGAN_NAMA_LAIN_DALAM_SUATU_KECAMATAN' ? 'selected' : '' }}>
                                Antar desa/kelurahan atau yang disebut dengan nama lain dalam satu kecamatan
                            </option>
                            <option value="ANTAR_KECAMATAN/YANG_DISEBUT_DENGAN_NAMA_LAIN_DALAM_SUATU_KABUPATEN/KOTA"
                                {{ old('lokasi_pindah') == 'ANTAR_KECAMATAN/YANG_DISEBUT_DENGAN_NAMA_LAIN_DALAM_SUATU_KABUPATEN/KOTA' ? 'selected' : '' }}>
                                Antar kecamatan atau yang disebut dengan nama lain dalam suatu kabupaten/kota
                            </option>
                            <option value="ANTAR_KABUPATEN/KOTA_DALAM_SATU_PROVINSI"
                                {{ old('lokasi_pindah') == 'ANTAR_KABUPATEN/KOTA_DALAM_SATU_PROVINSI' ? 'selected' : '' }}>
                                Antar kabupaten/kota dalam satu provinsi
                            </option>
                            <option value="ANTAR_PROVINSI"
                                {{ old('lokasi_pindah') == 'ANTAR_PROVINSI' ? 'selected' : '' }}>
                                Antar Provinsi
                            </option>
                        </select>
                        @error('lokasi_pindah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="alamat_tujuan_1">Alamat Tujuan</label>
                        <input type="text" class="form-control @error('alamat_tujuan_1') is-invalid @enderror"
                            id="alamat_tujuan_1" name="alamat_tujuan_1" placeholder="Alamat Tujuan"
                            value="{{ old('alamat_tujuan_1') }}">
                        @error('alamat_tujuan_1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="provinsi_tujuan">Provinsi Tujuan</label>
                            <input type="text" class="form-control @error('provinsi_tujuan') is-invalid @enderror"
                                id="provinsi_tujuan" name="provinsi_tujuan" placeholder="Provinsi Tujuan"
                                value="{{ old('provinsi_tujuan') }}">
                            @error('provinsi_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="kabupaten_tujuan">Kabupaten Tujuan</label>
                            <input type="text"
                                class="form-control @error('kabupaten_tujuan') is-invalid @enderror"
                                id="kabupaten_tujuan" name="kabupaten_tujuan" placeholder="Kabupaten Tujuan"
                                value="{{ old('kabupaten_tujuan') }}">
                            @error('kabupaten_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="kecamatan_tujuan">Kecamatan Tujuan</label>
                            <input type="text"
                                class="form-control @error('kecamatan_tujuan') is-invalid @enderror"
                                id="kecamatan_tujuan" name="kecamatan_tujuan" placeholder="Kecamatan Tujuan"
                                value="{{ old('kecamatan_tujuan') }}">
                            @error('kecamatan_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="kelurahan_tujuan">Desa/Kelurahan Tujuan</label>
                            <input type="text"
                                class="form-control @error('kelurahan_tujuan') is-invalid @enderror"
                                id="kelurahan_tujuan" name="kelurahan_tujuan" placeholder="Desa/Kelurahan Tujuan"
                                value="{{ old('kelurahan_tujuan') }}">
                            @error('kelurahan_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="dusun_tujuan">Dusun Tujuan</label>
                            <input type="text" class="form-control @error('dusun_tujuan') is-invalid @enderror"
                                id="dusun_tujuan" name="dusun_tujuan" placeholder="Dusun Tujuan"
                                value="{{ old('dusun_tujuan') }}">
                            @error('dusun_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="rw_tujuan">RW Tujuan</label>
                            <input type="text" class="form-control @error('rw_tujuan') is-invalid @enderror"
                                id="rw_tujuan" name="rw_tujuan" placeholder="RW Tujuan"
                                value="{{ old('rw_tujuan') }}">
                            @error('rw_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="rt_tujuan">RT Tujuan</label>
                            <input type="text" class="form-control @error('rt_tujuan') is-invalid @enderror"
                                id="rt_tujuan" name="rt_tujuan" placeholder="RT Tujuan"
                                value="{{ old('rt_tujuan') }}">
                            @error('rt_tujuan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" class="form-control @error('kode_pos') is-invalid @enderror"
                                id="kode_pos" name="kode_pos" placeholder="Kode Pos"
                                value="{{ old('kode_pos') }}">
                            @error('kode_pos')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                id="telepon" name="telepon" placeholder="Telepon" value="{{ old('telepon') }}">
                            @error('telepon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alasan_pindah">Alasan Pindah</label>
                        <select class="form-control" name="alasan_pindah" id="alasan_pindah">
                            <option disabled selected>-- Alasan Pindah --</option>
                            <option value="Pekerjaan" {{ old('alasan_pindah') == 'Pekerjaan' ? 'selected' : '' }}>
                                Pekerjaan
                            </option>
                            <option value="Pendidikan" {{ old('alasan_pindah') == 'Pendidikan' ? 'selected' : '' }}>
                                Pendidikan
                            </option>
                            <option value="Keamanan" {{ old('alasan_pindah') == 'Keamanan' ? 'selected' : '' }}>
                                Keamanan
                            </option>
                            <option value="Kesehatan" {{ old('alasan_pindah') == 'Kesehatan' ? 'selected' : '' }}>
                                Kesehatan
                            </option>
                            <option value="Perumahan" {{ old('alasan_pindah') == 'Perumahan' ? 'selected' : '' }}>
                                Perumahan
                            </option>
                            <option value="Keluarga" {{ old('alasan_pindah') == 'Keluarga' ? 'selected' : '' }}>
                                Keluarga
                            </option>
                            <option value="Lainnya" {{ old('alasan_pindah') == 'Lainnya' ? 'selected' : '' }}>
                                Lainnya
                            </option>
                        </select>
                        @error('alasan_pindah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="detail_lainnya" style="display:none;">
                        <div>
                            <input type="text" class="form-control @error('lainnya') is-invalid @enderror"
                                id="lainnya" name="lainnya" placeholder="Alasan Lainnya"
                                value="{{ old('lainnya') }}">
                            @error('lainnya')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kepindahan">Jenis Kepindahan</label>
                        <select class="form-control" name="jenis_kepindahan" id="jenis_kepindahan">
                            <option disabled selected>-- Jenis Kepindahan --</option>
                            <option value="KEPALA_KELUARGA"
                                {{ old('jenis_kepindahan') == 'KEPALA_KELUARGA' ? 'selected' : '' }}>
                                Kepala Keluarga
                            </option>
                            <option value="KEPALA_KELUARGA_DAN_SELURUH_ANGGOTA_KELUARGA"
                                {{ old('jenis_kepindahan') == 'KEPALA_KELUARGA_DAN_SELURUH_ANGGOTA_KELUARGA' ? 'selected' : '' }}>
                                Kepala Keluarga dan Seluruh Anggota Keluarga
                            </option>
                            <option value="KEPALA_KELUARGA_DAN_SEBAGIAN_ANGGOTA_KELUARGA"
                                {{ old('jenis_kepindahan') == 'KEPALA_KELUARGA_DAN_SEBAGIAN_ANGGOTA_KELUARGA' ? 'selected' : '' }}>
                                Kepala Keluarga dan Sebagian Anggota Keluarga
                            </option>
                            <option value="ANGGOTA_KELUARGA"
                                {{ old('jenis_kepindahan') == 'ANGGOTA_KELUARGA' ? 'selected' : '' }}>
                                Anggota Keluarga
                            </option>
                        </select>
                        @error('jenis_kepindahan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="statuskk_tidakpindah">Status KK Bagi Yang Tidak Pindah</label>
                        <select class="form-control" name="statuskk_tidakpindah" id="statuskk_tidakpindah">
                            <option disabled selected>-- Status KK Bagi Yang Tidak Pindah --</option>
                            <option value="Numpang KK"
                                {{ old('statuskk_tidakpindah') == 'Numpang_KK' ? 'selected' : '' }}>
                                Numpang KK
                            </option>
                            <option value=" Membuat KK Baru"
                                {{ old('statuskk_tidakpindah') == 'Membuat_KK_Baru' ? 'selected' : '' }}>
                                Membuat KK Baru
                            </option>
                        </select>
                        @error('statuskk_tidakpindah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="statuskk_pindah">Status KK Bagi Yang Pindah</label>
                        <select class="form-control" name="statuskk_pindah" id="statuskk_pindah">
                            <option disabled selected>-- Status KK Bagi Yang Pindah --</option>
                            <option value="Numpang KK" {{ old('statuskk_pindah') == 'Numpang_KK' ? 'selected' : '' }}>
                                Numpang KK
                            </option>
                            <option value=" Membuat KK Baru"
                                {{ old('statuskk_pindah') == 'Membuat_KK_Baru' ? 'selected' : '' }}>
                                Membuat KK Baru
                            </option>
                        </select>
                        @error('statuskk_pindah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>



















                    <div class="form-group">
                        <label for="keluarga_pindah">Keluarga Yang Pindah</label>
                        <select class="form-control" name="keluarga_pindah" id="keluarga_pindah">
                            <option disabled selected>-- Pilih --</option>
                            <option value="ADA" {{ old('keluarga_pindah') == 'ADA' ? 'selected' : '' }}>
                                Ada
                            </option>
                            <option value="TIDAK_ADA" {{ old('keluarga_pindah') == 'TIDAK_ADA' ? 'selected' : '' }}>
                                Tidak Ada
                            </option>
                        </select>
                        @error('keluarga_pindah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div id="detail_keluarga" style="display:none;">
                        <div>
                            <label for="keluarga_pindah_1">Nama dan Nik Keluarga Pindah Pertama</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_1') is-invalid @enderror"
                                id="keluarga_pindah_1" name="keluarga_pindah_1" placeholder="Nama dan Nik"
                                value="{{ old('keluarga_pindah_1') }}">
                            @error('keluarga_pindah_1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_2">Nama dan Nik Keluarga Pindah Kedua</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_2') is-invalid @enderror"
                                id="keluarga_pindah_2" name="keluarga_pindah_2" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_3">Nama dan Nik Keluarga Pindah Ketiga</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_3') is-invalid @enderror"
                                id="keluarga_pindah_3" name="keluarga_pindah_3" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_4">Nama dan Nik Keluarga Pindah Keempat</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_4') is-invalid @enderror"
                                id="keluarga_pindah_4" name="keluarga_pindah_4" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_4')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_5">Nama dan Nik Keluarga Pindah Kelima</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_5') is-invalid @enderror"
                                id="keluarga_pindah_5" name="keluarga_pindah_5" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_5')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_6">Nama dan Nik Keluarga Pindah Keenam</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_6') is-invalid @enderror"
                                id="keluarga_pindah_6" name="keluarga_pindah_6" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_6')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_7">Nama dan Nik Keluarga Pindah Ketujuh</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_7') is-invalid @enderror"
                                id="keluarga_pindah_7" name="keluarga_pindah_7" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_7')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="keluarga_pindah_8">Nama dan Nik Keluarga Pindah Kedelapan</label>
                            <input type="text"
                                class="form-control @error('keluarga_pindah_8') is-invalid @enderror"
                                id="keluarga_pindah_8" name="keluarga_pindah_8" placeholder="Nama dan Nik"
                                value="Biarkan Jika Tidak Ada">
                            @error('keluarga_pindah_8')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>




                    <div>
                        <label for="no_hp">No Hp</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                            id="no_hp" name="no_hp" placeholder="No Hp Atau Whatsapp Yang Bisa Dihubungi"
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>-->

    <!-- jQuery 3 -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js">
    </script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-ui/jquery-ui.min.js">
    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $
            .widget
            .bridge('uibutton', $.ui.button);
    </script>
    <!-- Sparkline -->
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js">
    </script>
    <!-- jvectormap -->
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js">
    </script>
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js">
    </script>
    <!-- jQuery Knob Chart -->
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-knob/dist/jquery.knob.min.js">
    </script>
    <!-- daterangepicker -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/moment/min/moment.min.js">
    </script>
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js">
    </script>
    <!-- datepicker -->
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">
    </script>
    <!-- Bootstrap WYSIHTML5 -->
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js">
    </script>
    <!-- Slimscroll -->
    <script
        src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js">
    </script>
    <!-- FastClick -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/fastclick/lib/fastclick.js">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/dist/js/demo.js"></script>
</body>
<script>
    $(document).ready(function() {
        $('#jenis_permohonan').on('change', function() {
            $('#detail_permohonan').hide();
            if (this.value == "SURAT_KETERANGAN_PINDAH_LUAR_NEGERI") {
                $('#detail_permohonan').show();
            }
            $('#detail_permohonan_2').hide();
            if (this.value == "SURAT_KETERANGAN_TEMPAT_TINGGAL_BAGI_ORANG_ASING_TINGGAL_TERBATAS") {
                $('#detail_permohonan_2').show();
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#status_pasangan').on('change', function() {
            $('#detail_pasangan').hide();
            if (this.value == "MASIH_HIDUP") {
                $('#detail_pasangan').show();
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#alasan_pindah').on('change', function() {
            $('#detail_lainnya').hide();
            if (this.value == "Lainnya") {
                $('#detail_lainnya').show();
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#keluarga_pindah').on('change', function() {
            $('#detail_keluarga').hide();
            if (this.value == "ADA") {
                $('#detail_keluarga').show();
            }
        })
    })
</script>
<script>
    const add = document.querySelectorAll(".input-group .add_name")
    add.forEach(function(e) {
        e.addEventListener('click', function() {
            let element = this.parentElement
            //console.log(element);
            let newElement = document.createElement('div')
            newElement.classList.add('input-group', 'mb-3')
            newElement.innerHTML =
                '<input type="text" class="form-control" placeholder="Nik dan Nama Lengkap" value="" name="anak_tanggungan[]"><button class="btn btn-danger remove_name" type="button" id="button-addon2">Hapus</button>'
            document.getElementById('extra-name').appendChild(newElement)

            document.querySelector('form').querySelectorAll('.remove_name').forEach(function(remove) {
                remove.addEventListener('click', function(elmClick) {
                    elmClick.target.parentElement.remove()
                })
            })
        })
    })
</script>

</html>
