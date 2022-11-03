<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../assets/img/PIP.png"/>
  <title>Admin | SPMDG</title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/img/SMPDG-R.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">SPMDG</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('adminLTE.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('Admin.index')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user-circle"></i>
            </div>
            <span class="nav-link-text ms-1">Tambah Admin</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Data Layanan Surat</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratSatu.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Satu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratDua.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Dua</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratEmpat.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Tiga</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratLima.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Empat</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratEnam.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Lima</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratTujuh.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Enam</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="{{ route('SuratDelapan.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Tujuh</span>
          </a>
        </li><li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratSembilan.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Delapan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratSepuluh.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Sembilan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="{{ route('SuratSebelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Sepuluh</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratDuabelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Sebelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="{{ route('SuratTigabelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Duabelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratEmpatbelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Tigabelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary " href="{{ route('SuratLimabelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Empatbelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratEnambelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Limabelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('SuratTujuhbelas.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Enambelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{route('SuratDelapanbelas.index')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-file-alt"></i>
            </div>
            <span class="nav-link-text ms-1">Surat Tujuhbelas</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">Admin</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Surat Keterangan Untuk Menikah</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tabel Data Surat</h6>
        </nav>
        <ul class="navbar-nav  justify-content-end">
            @auth
            <li class="nav-item d-flex pe-5 align-items-center">
              <a class="nav-link text-body font-weight-bold px-0">
                <span class="d-sm-inline d-none">Welcome Back {{auth()->admin()->username}},</span>
              </a>
            </li>
            @endauth
            <li class="nav-item d-flex align-items-center">
              <form action="{{ route('login.logout') }}" method="post">
              @csrf
                <button type="submit" class="nav-item btn btn-danger"><i class="bi bi-box-arrow-right"></i>Log Out </button>
              </form>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->



<div class="content-wrapper">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Surat Keterangan Untuk Menikah</h6>
              </div>
            </div>
            @if(session()->has('pesan'))
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
            </div>
            @endif
            <div class="card-body">
              <div class="table-responsive">
                <table class="table align-items-center">
                  <thead>
                    <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Data Calon Pasangan Pria</th>
                    <th class="text-center">Nik Pria (Warga Desa)</th>
                    <th class="text-center">Nama Pria (Warga Desa)</th>
                    <th class="text-center">Status Pria (Warga Desa)</th>
                    <th class="text-center">Nama Istri (Warga Desa)</th>
                    <th class="text-center">Jika Beristri Istri Ke</th>
                    <th class="text-center">Nik Pria (Luar Desa)</th>
                    <th class="text-center">Nama Pria (Luar Desa)</th>
                    <th class="text-center">Tempat Lahir (Pria Luar Desa)</th>
                    <th class="text-center">Tanggal Lahir (Pria Luar Desa)</th>
                    <th class="text-center">Warga Negara (Pria Luar Desa)</th>
                    <th class="text-center">Agama Pria (Luar Desa)</th>
                    <th class="text-center">Pekerjaan Pria (Luar Desa)</th>
                    <th class="text-center">Alamat Pria (Luar Desa)</th>
                    <th class="text-center">Status Pria (Luar Desa)</th>
                    <th class="text-center">Nama istri (Pria Luar Desa)</th>
                    <th class="text-center">Jika Beristri Istri Ke</th>
                    
                    <th class="text-center">Data Ayah Calon Pasangan Pria</th>
                    <th class="text-center">Nik Ayah (Pria Warga Desa)</th>
                    <th class="text-center">Nama Ayah(Pria Warga Desa)</th>
                    <th class="text-center">Nik Ayah (Pria Luar Desa)</th>
                    <th class="text-center">Bin ( Ayah Pria Luar Desa)</th>
                    <th class="text-center">Nama Ayah (Pria Luar Desa)</th>
                    <th class="text-center">Tempat Lahir Ayah(Pria Luar Desa)</th>
                    <th class="text-center">Tanggal Lahir Ayah(Pria Luar Desa)</th>
                    <th class="text-center">Warga Negara Ayah(Pria Luar Desa)</th>
                    <th class="text-center">Agama Ayah (Pria Luar Desa)</th>
                    <th class="text-center">Pekerjaan Ayah (Pria Luar Desa)</th>
                    <th class="text-center">Alamat Ayah (Pria Luar Desa)</th>

                    <th class="text-center">Data Ibu Calon Pasangan Pria</th>
                    <th class="text-center">Nik Ibu (Pria Warga Desa)</th>
                    <th class="text-center">Nama Ibu (Pria Warga Desa)</th>
                    <th class="text-center">Nik Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Binti (Ibu Pria Luar Desa)</th>
                    <th class="text-center">Nama Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Tempat Lahir Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Tanggal Lahir Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Warga Negara Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Agama Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Pekerjaan Ibu (Pria Luar Desa)</th>
                    <th class="text-center">Alamat Ibu (Pria Luar Desa)</th>

                    <th class="text-center">Data Pasangan Calon Wanita</th>
                    <th class="text-center">Nik Wanita (Warga Desa)</th>
                    <th class="text-center">Nama Wanita (Warga Desa)</th>
                    <th class="text-center">Status Wanita (Warga Desa)</th>
                    <th class="text-center">Nik Wanita (Luar Desa)</th>
                    <th class="text-center">Nama Wanita (Luar Desa)</th>
                    <th class="text-center">Tempat Lahir Wanita (Luar Desa)</th>
                    <th class="text-center">Tanggal Lahir Wanita (Luar Desa)</th>
                    <th class="text-center">Warga Negara Wanita (Luar Desa)</th>
                    <th class="text-center">Agama Wanita (Luar Desa)</th>
                    <th class="text-center">Pekerjaan Wanita (Luar Desa)</th>
                    <th class="text-center">Alamat Wanita (Luar Desa)</th>
                    <th class="text-center">Status Wanita (Luar Desa)</th>

                    <th class="text-center">Data Ayah Pasangan Calon Wanita</th>
                    <th class="text-center">Nik Ayah (Wanita Warga Desa)</th>
                    <th class="text-center">Nama Ayah (Wanita Warga Desa)</th>
                    <th class="text-center">Nik Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Bin (Ayah Wanita Luar Desa)</th>
                    <th class="text-center">Nama Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Tempat Lahir Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Tanggal Lahir Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Warga Negara Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Agama Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Pekerjaan Ayah (Wanita Luar Desa)</th>
                    <th class="text-center">Alamat Ayah (Wanita Luar Desa)</th>

                    <th class="text-center">Data Ibu Pasangan Calon Wanita</th>
                    <th class="text-center">Nik Ibu (Wanita Warga Desa)</th>
                    <th class="text-center">Nama Ibu (Wanita Warga Desa)</th>
                    <th class="text-center">Nik Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Binti (Ibu Wanita Luar Desa)</th>
                    <th class="text-center">Nama Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Tempat Lahir Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Tanggal Lahir Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Warga Negara Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Agama Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Pekerjaan Ibu (Wanita Luar Desa)</th>
                    <th class="text-center">Alamat Ibu (Wanita Luar Desa)</th>

                    <th class="text-center">Nik Wali Nikah</th>
                    <th class="text-center">Bin Wali Nikah</th>
                    <th class="text-center">Nama Wali Nikah</th>
                    <th class="text-center">Tempat Lahir Wali Nikah</th>
                    <th class="text-center">Tanggal Lahir Nikah</th>
                    <th class="text-center">Warga Negara Wali Nikah</th>
                    <th class="text-center">Agama Wali Nikah</th>
                    <th class="text-center">Pekerjaan Wali Nikah</th>
                    <th class="text-center">Alamat Wali Nikah</th>
                    <th class="text-center">Hubungan Wali Nikah</th>

                    <th class="text-center">Hari Nikah</th>
                    <th class="text-center">Tanggal Nikah</th>
                    <th class="text-center">Jam Nikah</th>
                    <th class="text-center">Tempat Nikah</th>

                    <th class="text-center">Surat Keterangan Kematian Suami</th>
                    <th class="text-center">Nama Suami</th>
                    <th class="text-center">Nik Suami</th>
                    <th class="text-center">Tanggal Meninggal Suami</th>
                    <th class="text-center">Tempat Meninggal Suami</th>

                    <th class="text-center">Surat Keterangan Kematian istri</th>
                    <th class="text-center">Nama Istri</th>
                    <th class="text-center">Nik Istri</th>
                    <th class="text-center">Tanggal Meninggal Istri</th>
                    <th class="text-center">Tempat Meninggal Istri</th>

                    <th class="text-center">Surat Keterangan Pencatatan Isbat</th>
                    <th class="text-center">Tanggal Penetapan</th>
                    <th class="text-center">Pengadilan Agama</th>

                    <th class="text-center">Surat Keterangan Penanaman Pohon</th>
                    <th class="text-center">Jenis Pohon</th>
                    <th class="text-center">Lokasi Pohon</th>
                    <th class="text-center">Jumlah Pohon</th>
                    <th class="text-center">No Hp</th>
                    </tr>
                  </thead>
                <tbody>
                    @forelse ($surat_limabelas as $surat_limabelas)
                    <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$loop->iteration}}</th>
                        <td class="text-uppercase text-center  font-weight-bolder "><button class="btn {{($surat_limabelas->status == 1) ? 'btn-danger' : 'btn-success' }}" disabled>{{($surat_limabelas->status == 1) ? 'Belum Tercetak' : 'Sudah Tercetak'}}</button></td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"><a href="{{ route('SuratLimabelas.show',['SuratLimabelas' => $surat_limabelas->id]) }}">{{$surat_limabelas->data_pria_wargadesa}}</a></td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                        {{$surat_limabelas->nik_pria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_pria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->status_pria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->namaistri_pria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->istri_ke_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->status_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->namaistri_pria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->istri_ke_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->data_ayahpria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ayahpria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ayahpria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->bin_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_ayahpria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->data_ibupria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ibupria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ibupria_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->binti_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_ibupria_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->data_wanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_wanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_wanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->status_wanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->status_wanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->data_ayahwanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ayahwanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ayahwanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->bin_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_ayahwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->data_ibuwanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ibuwanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ibuwanita_wargadesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->binti_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_ibuwanita_wargaluardesa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->bin_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_lahir_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_lahir_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->warga_negara_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->agama_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pekerjaan_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->alamat_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->hubungan_walinikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->hari_nikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_nikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->jam_nikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_nikah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->berkas_tambahan_1}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_suami}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_suami}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_meninggal_suami}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_meninggal_suami}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->berkas_tambahan_2}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nama_istri}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->nik_istri}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_meninggal_istri}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tempat_meninggal_istri}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->berkas_tambahan_3}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->tanggal_penetapan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->pengadilan_agama}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->berkas_tambahan_4}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->jenis_pohon}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->lokasi_pohon}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->jumlah_pohon}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_limabelas->no_hp}}</td>
                    </tr>
                    @empty
                    <td colspan="6" class="text-center">Tidak ada data...</td>
                    @endforelse
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

















        <!--Footer-->
            <footer class="footer py-4">
                <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-lg-start">
                        © <script>
                        document.write(new Date().getFullYear())
                        </script> ,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://grujugan.kec-petanahan.kebumenkab.go.id/" class="font-weight-bold" target="_blank">Pemerintah Desa Grujugan</a>
                    </div>
                    </div>
                </div>
                </div>
            </footer>
        <!--End Footer-->
    </div>
  </main>


  






























  <!--   Core JS Files   -->
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/core/popper.min.js"></script>
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/core/bootstrap.min.js"></script>
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>