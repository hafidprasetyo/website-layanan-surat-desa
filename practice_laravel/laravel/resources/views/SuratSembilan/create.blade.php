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
                <h3>Surat Keterangan Domisili</h3>
                    <hr>
                    <form action="{{ route('SuratSembilan.store') }}" method="POST">
                        @csrf
                        <div class="row">
                        <div class = "col">
                                <label for="nik">Nik</label>
                                <input
                                    type="text"
                                    class="form-control @error('nik') is-invalid @enderror"
                                    id="nik"
                                    name="nik"
                                    placeholder="Nik Anda"
                                    value="{{ old('nik') }}">
                                @error('nik')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="nama">Nama Lengkap</label>
                                <input
                                    type="text"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    id="nama"
                                    name="nama"
                                    placeholder="Nama Lengkap"
                                    value="{{ old('nama') }}">
                                @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    id="tempat_lahir"
                                    name="tempat_lahir"
                                    placeholder="Tempat Lahir"
                                    value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input
                                    type="text"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    id="tanggal_lahir"
                                    name="tanggal_lahir"
                                    placeholder="Tanggal Lahir"
                                    value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col">
                                <label for="provinsi_asal">Provinsi Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('provinsi_asal') is-invalid @enderror"
                                    id="provinsi_asal"
                                    name="provinsi_asal"
                                    placeholder="Provinsi Asal"
                                    value="{{ old('provinsi_asal') }}">
                                @error('provinsi_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="kabupaten_asal">Kabupaten Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('kabupaten_asal') is-invalid @enderror"
                                    id="kabupaten_asal"
                                    name="kabupaten_asal"
                                    placeholder="Kabupaten Asal"
                                    value="{{ old('kabupaten_asal') }}">
                                @error('kabupaten_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col">
                                <label for="kecamatan_asal">Kecamatan Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('kecamatan_asal') is-invalid @enderror"
                                    id="kecamatan_asal"
                                    name="kecamatan_asal"
                                    placeholder="Kecamatan Asal"
                                    value="{{ old('kecamatan_asal') }}">
                                @error('kecamatan_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="kelurahan_asal">Kelurahan/Desa Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('kelurahan_asal') is-invalid @enderror"
                                    id="kelurahan_asal"
                                    name="kelurahan_asal"
                                    placeholder="Kelurahan/Desa Asal"
                                    value="{{ old('kelurahan_asal') }}">
                                @error('kelurahan_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col">
                                <label for="dusun_asal">Dusun Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('dusun_asal') is-invalid @enderror"
                                    id="dusun_asal"
                                    name="dusun_asal"
                                    placeholder="Dusun Asal"
                                    value="{{ old('dusun_asal') }}">
                                @error('dusun_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="rw_asal">RW Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('rw_asal') is-invalid @enderror"
                                    id="rw_asal"
                                    name="rw_asal"
                                    placeholder="RW Asal"
                                    value="{{ old('rw_asal') }}">
                                @error('rw_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="rt_asal">RT Asal</label>
                                <input
                                    type="text"
                                    class="form-control @error('rt_asal') is-invalid @enderror"
                                    id="rt_asal"
                                    name="rt_asal"
                                    placeholder="RT Asal"
                                    value="{{ old('rt_asal') }}">
                                @error('rt_asal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option disabled selected>--Jenis Kelamin--</option>
                                <option
                                    value="LAKI-LAKI"
                                    {{ old('jenis_kelamin')=='LAKI-LAKI' ? 'selected': '' }}>
                                    LAKI-LAKI
                                </option>
                                <option
                                    value="PEREMPUAN"
                                    {{ old('jenis_kelamin')=='PEREMPUAN' ? 'selected': '' }}>
                                    PEREMPUAN
                                </option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            </div>
                            <div class = "col">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input
                                    type="text"
                                    class="form-control @error('pekerjaan') is-invalid @enderror"
                                    id="pekerjaan"
                                    name="pekerjaan"
                                    placeholder="Pekerjaan"
                                    value="{{ old('pekerjaan') }}">
                                @error('pekerjaan')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col">
                            <div class="form-group">
                            <label for="agama">Agama</label>
                            <select class="form-control" name="agama" id="agama">
                            <option disabled selected>--Agama--</option>
                                <option
                                    value="ISLAM"
                                    {{ old('agama')=='ISLAM' ? 'selected': '' }}>
                                    ISLAM
                                </option>
                                <option
                                    value="KRISTEN"
                                    {{ old('agama')=='KRISTEN' ? 'selected': '' }}>
                                    KRISTEN
                                </option>
                                <option
                                    value="KATHOLIK"
                                    {{ old('agama')=='KATHOLIK' ? 'selected': '' }}>
                                    KATHOLIK
                                </option>
                                <option
                                    value="HINDU"
                                    {{ old('agama')=='HINDU' ? 'selected': '' }}>
                                    HINDU
                                </option>
                                <option
                                    value="BUDHA"
                                    {{ old('agama')=='BUDHA' ? 'selected': '' }}>
                                    BUDHA
                                </option>
                                <option
                                    value="KHONGHUCU"
                                    {{ old('agama')=='KHONGHUCU' ? 'selected': '' }}>
                                    KHONGHUCU
                                </option>
                                <option
                                    value="Kepercayaan_Kepada_TuhanYME/Lainnnya"
                                    {{ old('agama')=='Kepercayaan_Kepada_TuhanYME/Lainnnya' ? 'selected': '' }}>
                                    Kepercayaan Kepada TuhanYME/Lainnnya
                                </option>
                            </select>
                            @error('agama')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                            <label for="dusun_domisili">Dusun Domisili</label>
                            <select class="form-control" name="dusun_domisili" id="dusun_domisili">
                            <option disabled selected>--Dusun Domisili--</option>
                                <option
                                    value="ENTHAK"
                                    {{ old('dusun_domisili')=='ENTHAK' ? 'selected': '' }}>
                                    ENTHAK
                                </option>
                                <option
                                    value="KARANG_KEMIRI"
                                    {{ old('dusun_domisili')=='KARANG_KEMIRI' ? 'selected': '' }}>
                                    KARANG KEMIRI
                                </option>
                                <option
                                    value="KEMRANGGON"
                                    {{ old('dusun_domisili')=='KEMRANGGON' ? 'selected': '' }}>
                                    KEMRANGGON
                                </option>
                            </select>
                            @error('dusun_domisili')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            </div>
                            <div class = "col">
                                <label for="rw_domisili">RW Domisili</label>
                                <input
                                    type="text"
                                    class="form-control @error('rw_domisili') is-invalid @enderror"
                                    id="rw_domisili"
                                    name="rw_domisili"
                                    placeholder="RW Domisili"
                                    value="{{ old('rw_domisili') }}">
                                @error('rw_domisili')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class = "col">
                                <label for="rt_domisili">RT Domisili</label>
                                <input
                                    type="text"
                                    class="form-control @error('rt_domisili') is-invalid @enderror"
                                    id="rt_domisili"
                                    name="rt_domisili"
                                    placeholder="RT Domisili"
                                    value="{{ old('rt_domisili') }}">
                                @error('rt_domisili')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" rows="3" name="keterangan" value="{{ old('keterangan')}}">adalah benar-benar penduduk yang saat ini berdomisili di Dusun...RT...RW... Desa Grujugan Kecamatan Petanahan.</textarea>
                            </div>
                            <div class="form-group">
                                <label for="keterangan_lain">Keterangan Lain</label>
                                <textarea class="form-control" id="keterangan_lain" rows="3" name="keterangan_lain" >{{ old('keterangan_lain') }}</textarea>
                            </div>
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
</html>