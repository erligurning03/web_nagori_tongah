<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- ini adalah css user defind --}}
    <link href="{{ asset('css/belanja.css') }}" rel="stylesheet">
    {{-- font awesome untuk icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Nagori NagoriTongah</title>
  </head>
  <body>
      {{-- start navbar --}}
      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #C6C6C6;">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="gambar_desa.jpg" alt="Logo Desa" width="30" height="30" class="d-inline-block align-text-top">
            Nama Desa
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Tab 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tab 2</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown 1
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                  <li><a class="dropdown-item" href="#">Link 1</a></li>
                  <li><a class="dropdown-item" href="#">Link 2</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown 2
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdown2">
                  <li><a class="dropdown-item" href="#">Link 3</a></li>
                  <li><a class="dropdown-item" href="#">Link 4</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-flex">
              <button class="btn btn-primary me-2" type="button">Login</button>
              <button class="btn btn-secondary" type="button">Register</button>
            </div>
          </div>
        </div>
      </nav>
      
      {{-- end of navbar --}}

      {{-- start section1 --}}
      {{-- <section class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <h2>Diagram Lingkaran</h2>
            <div class="chart-container">
              <canvas id="pieChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <h2>Keterangan Warna</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kategori 1
                <span class="badge bg-primary"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kategori 2
                <span class="badge bg-success"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Kategori 3
                <span class="badge bg-warning"> </span>
              </li>
            </ul>
          </div>
        </div>
      </section> --}}
      
      {{-- end section grafiki --}}

      {{-- start pernaikan grafik --}}
      <section class="container mt-5">
        <div class="row">
          <div class="col-lg-6">
            <h2>TRANSPARANSI BELANJA NAGORI NAGORI TONGAH TAHUN 2023</h2>
            <div class="chart-container">
              <canvas id="incomeChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <h2>Keterangan Warna</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pemerintahan nagori
                <span class="badge bg-primary"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pembangunan nagori
                <span class="badge bg-success"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pembinaan nagori
                <span class="badge bg-warning"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                bidang pemberdayaan nagori
                <span class="badge bg-warning"> </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h2>TRANSPARANSI PENDAPATAN NAGORI NAGORI TONGAH TAHUN 2023</h2>
            <div class="chart-container">
              <canvas id="expenseChart"></canvas>
            </div>
          </div>
          <div class="col-lg-6">
            <h2>Keterangan Warna</h2>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Dana Desa (DD)
                <span class="badge bg-primary"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Alokasi Dana Nagori
                <span class="badge bg-success"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Bagi Hasil Pajak dann Retribusi Daerah
                <span class="badge bg-warning"> </span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                pendapatan lain-lain
                <span class="badge bg-success"> </span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      {{-- start card --}}
      <section class="container mt-5">
        <div class="row">
          {{-- <div class="col-lg-6">
            <h2>Diagram Batang</h2>
            <div class="chart-container">
              <canvas id="barChart"></canvas>
            </div>
          </div> --}}
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">APBDES 2023 PELAKSANAAN </h5>
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-sm-6 col-lg-6">total pendapatan  </div>
                      <div class="col-sm-1 col-lg-1">:</div>
                      <div class="col-sm-5 col-lg-5">Rp45.000.000.000</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">total belanja</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp10.000.100.321</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">APBEDES 2023 PENDAPATAN</h5>
                <ul class="list-group">
                  <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">DANA DESA (DD)</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp705.589.000,-</div>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">alokasi dana nagori (ADN)</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp303.000.100</div>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">Bagi hasil pajak dan retribusi daerah</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp20.000.100</div>
                      </div>
                  </li>
                  <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">pendapatan lain-lain</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp8.000.000</div>
                      </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow">
              <div class="card-body">
                <h5 class="card-title">APBEDES 2023 PEMBELANJAAN</h5>
                <ul class="list-group">
                  <li class="list-group-item">
                      <div class="row">
                        <div class="col-lg-6 col-sm-6">bidang penyelenggaraan pemerintah nagori</div>
                        <div class="col-lg-1 col-sm-1">:</div>
                        <div class="col-lg-5 col-sm-5">Rp323.000.100</div>
                      </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang pelaksanaan pembangunan Nagori</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp371.000.100</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang pembinaan nagori</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp0,-</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang pemberdayaan masyarakat</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp16.000.100</div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col-lg-6 col-sm-6">bidang penanggulangan bencana, darurat, dan mendesak</div>
                      <div class="col-lg-1 col-sm-1">:</div>
                      <div class="col-lg-5 col-sm-5">Rp327.000.100</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      {{-- end card --}}
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        // Inisialisasi data diagram pemasukan
        var incomeData = {
          labels: ["Kategori 1", "Kategori 2", "Kategori 3"],
          datasets: [{
            data: [40, 30, 30],
            backgroundColor: ["#007bff", "#28a745", "#ffc107"]
          }]
        };
      
        // Inisialisasi opsi diagram pemasukan
        var incomeOptions = {
          responsive: true,
          animation: {
            animateRotate: true,
            animateScale: true
          }
        };
      
        // Menggambar diagram pemasukan menggunakan Chart.js
        var incomeChart = new Chart(document.getElementById('incomeChart'), {
          type: 'doughnut',
          data: incomeData,
          options: incomeOptions
        });
      
        // Inisialisasi data diagram pengeluaran
        var expenseData = {
          labels: ["Kategori A", "Kategori B", "Kategori C"],
          datasets: [{
            data: [20, 50, 30],
            backgroundColor: ["#dc3545", "#6c757d", "#ffc107"]
          }]
        };
      
        // Inisialisasi opsi diagram pengeluaran
        var expenseOptions = {
          responsive: true,
          animation: {
            animateRotate: true,
            animateScale: true
          }
        };
      
        // Menggambar diagram pengeluaran menggunakan Chart.js
        var expenseChart = new Chart(document.getElementById('expenseChart'), {
          type: 'doughnut',
          data: expenseData,
          options: expenseOptions
        });
      </script>
      
      {{-- end perbaikan grafik --}}
      
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Inisialisasi data diagram lingkaran
  var pieData = {
    labels: ["Kategori 1", "Kategori 2", "Kategori 3"],
    datasets: [{
      data: [30, 50, 20],
      backgroundColor: ["#007bff", "#28a745", "#ffc107"]
    }]
  };

  // Inisialisasi opsi diagram lingkaran
  var pieOptions = {
    responsive: true,
    animation: {
      animateRotate: true,
      animateScale: true
    }
  };

  // Menggambar diagram lingkaran menggunakan Chart.js
  var pieChart = new Chart(document.getElementById('pieChart'), {
    type: 'doughnut',
    data: pieData,
    options: pieOptions
  });
</script> --}}

  </body>
</html>