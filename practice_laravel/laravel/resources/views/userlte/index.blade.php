<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/img/PIP.png"/>
  <title>Layanan Surat Desa Grujugan</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        name="viewport">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('') }}/laravel/vendor/almasaeed2010/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!--Boostrap Css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/css/material-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-light bg-white shadow-sm mb-1 bg-body rounded">
      <div class="container-fluid py-1 px-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                <a class="nav-link active font-sans-serif" aria-current="page" href="{{ route('user.index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link font-sans-serif" aria-current="page" href="{{ route('userlte.contact') }}">Kontak</a>
                </li>
                <li class="nav-item">
                <a class="nav-link font-sans-serif" aria-current="page" href="#">Tentang</a>
                </li>
            </ul>
            </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <h3 class="text-center font-sans-serif"> Layanan Surat Desa Grujugan</h3></br>
      <!--Content-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">1</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Pendaftaran Peristiwa Kependudukan</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratSatu.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">2</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Pendaftaran Perpindahan Penduduk</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratDua.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">3</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Kelahiran</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratEmpat.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">4</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Kematian</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratLima.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <!--End 4 Surat Baris Pertama-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          
        <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">5</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Beda Nama</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratDelapanbelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>


        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">6</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Pengantar</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratEnam.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">7</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Ijin Suami/Istri</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratTujuh.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">8</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Usaha</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratDelapan.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <!--End 4 Surat Baris Kedua-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">9</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Domisili</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratSembilan.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">10</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Kelakuan Baik</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratSepuluh.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">11</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Bersih Diri</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratSebelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">12</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Tidak Mampu</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratDuabelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <!--End 4 Surat Baris Ketiga-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">13</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Penghasilan dan Tanggungan Keluarga</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratTigabelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">14</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Ijin Orang Tua/Wali</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratEmpatbelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">15</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Keterangan Untuk Nikah</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratLimabelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">16</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Pernyataan Belum Nikah</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratEnambelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <!--End 4 Surat Baris Keempat-->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
          <div class="card">
            <div class="card-header p-4 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="fa fa-file-alt"></i>
              </div>
              <div class="text-end pt-3">
                <h4 class="mb-0">17</h4>
                <p class="text-sm mb-0 text-capitalize">Surat Pernyataan Belum/Tidak Bekerja</p>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-1">
            <a href="{{ route('SuratTujuhbelas.create') }}" class="card-footer">Ajukan
            <i class="fa fa-arrow-circle-right"></i>
            </a>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mt-4">
        
        </div>
        <!--End 4 Surat Baris Kelima-->
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

   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('') }}/laravel/vendor/material-dashboard-master/assets/js/material-dashboard.min.js"></script>
</body>

</html>