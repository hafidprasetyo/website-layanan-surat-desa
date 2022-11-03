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
      <a class="navbar-brand m-0"  target="_blank">
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
          <a class="nav-link text-white active bg-gradient-primary " href="{{ route('SuratEmpat.index') }}">
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
          <a class="nav-link text-white " href="{{ route('SuratSebelas.index') }}">
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
          <a class="nav-link text-white " href="{{ route('SuratTigabelas.index') }}">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Surat Kelahiran</li>
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
                <h6 class="text-white text-capitalize ps-3">Data Surat Kelahiran</h6>
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
                    <th class="text-center">No Dokumen</th>
                    <th class="text-center">Nama Bayi</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Tempat Dilahirkan</th>
                    <th class="text-center">Tempat Kelahiran</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Waktu Lahir</th>
                    <th class="text-center">Jenis Kelahiran</th>
                    <th class="text-center">Kelahiran Ke</th>
                    <th class="text-center">Penolong Kelahiran</th>
                    <th class="text-center">Berat Bayi</th>
                    <th class="text-center">Panjang Bayi</th>
                    <th class="text-center">Status Ayah</th>
                    <th class="text-center">Nama Ayah</th>
                    <th class="text-center">Nik Ayah</th>
                    <th class="text-center">Tempat Lahir Ayah</th>
                    <th class="text-center">Tanggal Lahir Ayah</th>
                    <th class="text-center">Kewarganegaraan Ayah</th>
                    <th class="text-center">Status Ibu</th>
                    <th class="text-center">Nama Ibu</th>
                    <th class="text-center">Nik Ibu</th>
                    <th class="text-center">Tempat Lahir Ibu</th>
                    <th class="text-center">Tanggal Lahir Ibu</th>
                    <th class="text-center">Kewarganegaraan Ibu</th>
                    <th class="text-center">Saksi I</th>
                    <th class="text-center">Saksi II</th>
                    <th class="text-center">No Hp</th>
                    </tr>
                  </thead>
                <tbody>
                    @forelse ($surat_empats as $surat_empats)
                    <tr>
                        <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$loop->iteration}}</th>
                        <td class="text-uppercase text-center  font-weight-bolder "><button class="btn {{($surat_empats->status == 1) ? 'btn-danger' : 'btn-success' }}" disabled>{{($surat_empats->status == 1) ? 'Belum Tercetak' : 'Sudah Tercetak'}}</button></td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->nik}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">
                            <a href="{{ route('SuratEmpat.show',['SuratEmpat' => $surat_empats->id]) }}">{{$surat_empats->nama}}</a>
                        </td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tempat_lahir}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tanggal_lahir}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->alamat}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->pendidikan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->warga_negara}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->agama}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->no_dokumen}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->nama_bayi}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->jenis_kelamin}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tempat_dilahirkan}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tempat_kelahiran}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tanggal}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->waktu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->jenis_kelahiran}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->kelahiran_ke}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->penolong_kelahiran}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->berat_bayi}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->panjang_bayi}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->status_ayah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->nama_ayah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->nik_ayah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tempat_lahir_ayah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tanggal_lahir_ayah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->kewarganegaraan_ayah}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->status_ibu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->nama_ibu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->nik_ibu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tempat_lahir_ibu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->tanggal_lahir_ibu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->kewarganegaraan_ibu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->saksi_satu}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->saksi_dua}}</td>
                        <td class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">{{$surat_empats->no_hp}}</td>
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