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
          <a class="nav-link text-white active bg-gradient-primary " href="{{ route('SuratDua.index') }}">
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
          <a class="nav-link text-white " href="{{ route('SuratLimabelas.index') }}">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Surat Pendaftaran Perpindahan Penduduk</li>
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
                <h6 class="text-white text-capitalize ps-3">Data Surat Pendaftaran Perpindahan Penduduk</h6>
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
                    <th class="text-center">Nik</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Tempat Lahir</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Pendidikan</th>
                    <th class="text-center">Warga Negara</th>
                    <th class="text-center">Agama</th>
                    <th class="text-center">Jenis Permohonan</th>
                    <th class="text-center">Negara Tujuan</th>
                    <th class="text-center">Alamat Tujuan</th>
                    <th class="text-center">Penanggung Jawab</th>
                    <th class="text-center">Rencana Pindah Tanggal</th>
                    <th class="text-center">Nama Sponsor</th>
                    <th class="text-center">Tipe Sponsor</th>
                    <th class="text-center">Alamat Sponsor</th>
                    <th class="text-center">Nomor KITAS & KITAP</th>
                    <th class="text-center">Tanggal Masa Berlaku KITAS & KITAB</th>
                    <th class="text-center">Lokasi Pindah</th>
                    <th class="text-center">Alamat Tujuan</th>
                    <th class="text-center">Provinsi Tujuan</th>
                    <th class="text-center">Kabupaten Tujuan</th>
                    <th class="text-center">Kecamatan Tujuan</th>
                    <th class="text-center">Kelurahan/Desa Tujuan</th>
                    <th class="text-center">Dusun Tujuan</th>
                    <th class="text-center">RW Tujuan</th>
                    <th class="text-center">RT Tujuan</th>
                    <th class="text-center">Kode Pos</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Alasan Pindah</th>
                    <th class="text-center">Lainnya</th>
                    <th class="text-center">Jenis Kepindahan</th>
                    <th class="text-center">Status KK Yang Tidak Pindah</th>
                    <th class="text-center">Status KK Yang Pindah</th>
                    <th class="text-center">Keluarga Pindah</th>
                    <th class="text-center">Keluarga Pindah 1</th>
                    <th class="text-center">Keluarga Pindah 2</th>
                    <th class="text-center">Keluarga Pindah 3</th>
                    <th class="text-center">Keluarga Pindah 4</th>
                    <th class="text-center">Keluarga Pindah 5</th>
                    <th class="text-center">Keluarga Pindah 6</th>
                    <th class="text-center">Keluarga Pindah 7</th>
                    <th class="text-center">Keluarga Pindah 8</th>
                    <th class="text-center">No Hp</th>
                    </tr>
                  </thead>
                <tbody>
                    @forelse ($surat_duas as $surat_duas)
                    <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$loop->iteration}}</th>
                        <td class="text-uppercase text-center  font-weight-bolder "><button class="btn {{($surat_duas->status == 1) ? 'btn-danger' : 'btn-success' }}" disabled>{{($surat_duas->status == 1) ? 'Belum Tercetak' : 'Sudah Tercetak'}}</button></td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->nik}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                            <a href="{{ route('SuratDua.show',['SuratDua' => $surat_duas->id]) }}">{{$surat_duas->nama}}</a>
                        </td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->tempat_lahir}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->tanggal_lahir}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->alamat}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->pendidikan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->warga_negara}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->agama}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->jenis_permohonan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->negara_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->kode_negara}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->alamat_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->penanggung_jawab}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->rencana_pindah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->nama_sponsor}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->tipe_sponsor}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->nomor}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->tanggal_masa}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->lokasi_pindah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->alamat_tujuan_1}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->provinsi_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->kabupaten_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->kecamatan_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->kelurahan_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->dusun_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->rw_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->rt_tujuan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->kode_pos}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->telepon}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->alasan_pindah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->lainnya}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->jenis_kepindahan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->statuskk_tidakpindah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->statuskk_pindah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_1}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_2}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_3}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_4}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_5}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_6}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_7}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->keluarga_pindah_8}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_duas->no_hp}}</td>
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