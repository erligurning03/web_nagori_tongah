@extends('layouts.navbar_warga')
@section('css')
<style>
  .chart-container {
    width: 400px;
    /* Ubah lebar wadah chart */
    height: 400px;
    /* Ubah tinggi wadah chart */
    margin-bottom: 20px;
    /* Jarak antara chart */
  }
</style>
@endsection
@section('container')
@if(Auth::check())
  @else
  <a href="/">
  <button type="button" class="btn btn-secondary" style="margin-left:10px; margin-top:10px;">Kembali</button>
</a>
  @endif
<section class="container mt-5">

  <div class="row">
    <div class="col-lg-6">
      <h2>TRANSPARANSI PENDAPATAN NAGORI NAGORI TONGAH TAHUN <?php echo date('Y'); ?></h2>
    </div>
    <div class="col-lg-6">
      <div class="chart-container">
        <canvas id="pendapatanChart"></canvas>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <h2>TRANSPARANSI BELANJA NAGORI NAGORI TONGAH TAHUN <?php echo date('Y'); ?></h2>
    </div>
    <div class="col-lg-6">
      <div class="chart-container">
        <canvas id="pengeluaranChart"></canvas>
      </div>
    </div>
  </div>
</section>

{{-- start card --}}
<section class="container mt-5">
  <div class="row">
    <div class="col-lg-4 mb-5">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">APBDES <?php echo date('Y'); ?> PELAKSANAAN </h5>
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-sm-6 col-lg-6">total pendapatan </div>
                <div class="col-sm-1 col-lg-1">:</div>
                @foreach ($pendapatanDataa as $pendapatan) 
                <div class="col-sm-5 col-lg-5">Rp {{ number_format(floatval($pendapatan->total_pendapatan), 0, ',', '.') }}</div>
                @endforeach
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-lg-6 col-sm-6">total belanja</div>
                <div class="col-lg-1 col-sm-1">:</div>
                @foreach ($pengeluaranDataa as $pengeluaran)
                <div class="col-sm-5 col-lg-5">Rp {{ number_format(floatval($pengeluaran->total_pengeluaran), 0, ',', '.') }}</div>
                @endforeach
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-5">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">APBEDES <?php echo date('Y'); ?> PENDAPATAN</h5>
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                @foreach ($pendapatanData as $data) 
                <div class="col-lg-6 col-sm-6">{{ $data->sumber }}</div>
                <div class="col-lg-1 col-sm-1">:</div>
                <div class="col-lg-5 col-sm-5">Rp {{ number_format(floatval($data->total), 0, ',', '.') }}</div>
                @endforeach
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-5">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">APBEDES <?php echo date('Y'); ?> PEMBELANJAAN</h5>
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                @foreach ($pengeluaranData as $data)
                <div class="col-lg-6 col-sm-6">{{ $data->bidang }}</div>
                <div class="col-lg-1 col-sm-1">:</div>
                <div class="col-lg-5 col-sm-5">Rp {{ number_format(floatval($data->total), 0, ',', '.') }}</div>
                @endforeach
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
  // Mengambil data pendapatan dari URL /chart/data
  fetch('/chart/data')
    .then(response => response.json())
    .then(data => {
      const pendapatanLabels = data.pendapatan.map(item => item.sumber);
      const pendapatanValues = data.pendapatan.map(item => item.total);

      const ctxPendapatan = document.getElementById('pendapatanChart').getContext('2d');
      const pendapatanChart = new Chart(ctxPendapatan, {
        type: 'pie', // Mengubah tipe chart menjadi 'pie'
        data: {
          labels: pendapatanLabels,
          datasets: [{
            label: 'Pendapatan',
            data: pendapatanValues,
            backgroundColor: ['rgba(85, 107, 47, 0.5)', 'rgba(240, 230, 140, 0.5)', 'rgba(189, 183, 107, 0.5)', 'rgba(107, 142, 35, 0.5)', 'rgba(194, 178, 128, 0.5)'], // Warna latar belakang untuk setiap bagian lingkaran
            borderColor: ['rgba(85, 107, 47, 1)', 'rgba(240, 230, 140, 1)', 'rgba(189, 183, 107, 1)', 'rgba(107, 142, 35, 1)', 'rgba(194, 178, 128, 1)'], // Warna batas untuk setiap bagian lingkaran
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    });
</script>

<script>
  // Mengambil data pengeluaran dari URL /chart/data
  fetch('/chart/data')
    .then(response => response.json())
    .then(data => {
      const pengeluaranLabels = data.pengeluaran.map(item => item.bidang);
      const pengeluaranValues = data.pengeluaran.map(item => item.total);

      const ctxPengeluaran = document.getElementById('pengeluaranChart').getContext('2d');
      const pengeluaranChart = new Chart(ctxPengeluaran, {
        type: 'pie', // Mengubah tipe chart menjadi 'pie'
        data: {
          labels: pengeluaranLabels,
          datasets: [{
            label: 'Pengeluaran',
            data: pengeluaranValues,
            backgroundColor: ['rgba(85, 107, 47, 0.5)', 'rgba(240, 230, 140, 0.5)', 'rgba(189, 183, 107, 0.5)', 'rgba(107, 142, 35, 0.5)', 'rgba(194, 178, 128, 0.5)'], // Warna latar belakang untuk setiap bagian lingkaran
            borderColor: ['rgba(85, 107, 47, 1)', 'rgba(240, 230, 140, 1)', 'rgba(189, 183, 107, 1)', 'rgba(107, 142, 35, 1)', 'rgba(194, 178, 128, 1)'], // Warna batas untuk setiap bagian lingkaran
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    });
</script>
@endsection
