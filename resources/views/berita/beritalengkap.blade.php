@extends('layouts.navbar_warga')
@section('css')
<style>
    .card-img-top {
      max-height: 500px;
      object-fit: cover;
    }
</style>
@endsection
@section('container')
    <h1 class="text-center"></h1>

<body>
  {{-- <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background: #C6C6C6;
    ";>
        <!-- atau bisa pake bg-primary -->
        <div class="container">
          <a class="navbar-brand" href="#">Nagori NagoriTongah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <!--  ms-auto margin start auto memungkinkan tammpilan meper kanan -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home"><b>Utama</b></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  layanan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#home">wisata</a>
              </li>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button" style="background-color:#3A655D;">MASUK</button>
                <button class="btn btn-primary" type="button" style="background-color:#2B2B2B;">DAFTAR</button>
              </div>
            </ul>
          </div>
        </div>
      </nav> --}}
      <!-- end of navbar -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <div class="card">
          <img src="img/br1.png" class="card-img-top" alt="Image">
          <div class="card-body">
            <h5 class="card-title"><b>Petunjuk Teknis Pengurusan Surat Keterangan Untuk Dibawa Ke Kantor Camat</b></h5>
            <p class="card-text">Diunggah: 21 mei 2023</p>
            <p class="card-text">Pemerintah Desa Nagori NagoriTongah telah mengeluarkan petunjuk teknis terkait pengurusan surat keterangan yang harus dibawa ke kantor Camat. Petunjuk teknis ini bertujuan untuk memudahkan masyarakat dalam proses pengurusan surat keterangan yang diperlukan untuk berbagai keperluan administratif.
            Dalam petunjuk teknis yang dikeluarkan oleh Pemerintah Desa, disebutkan beberapa hal yang perlu diperhatikan dalam pengurusan surat keterangan yang akan dibawa ke kantor Camat, antara lain:
            <p> 1. Persyaratan Dokumen: Pastikan Anda telah melengkapi semua dokumen yang diperlukan sesuai dengan jenis surat keterangan yang akan diajukan. Dokumen yang umumnya dibutuhkan antara lain fotokopi KTP, surat pengantar, dan dokumen pendukung lainnya sesuai dengan keperluan surat keterangan yang diminta.</p>
            <p> 2. Pengisian Formulir: Isilah formulir pengurusan surat keterangan dengan lengkap dan jelas. Pastikan tidak ada informasi yang terlewat atau salah di dalam formulir tersebut. Jika ada pertanyaan atau ketidakjelasan, jangan ragu untuk meminta bantuan petugas di kantor Camat.</p>  
            <p> 3. Verifikasi Data: Sebelum mengajukan surat keterangan, pastikan semua data yang tercantum di dalamnya sudah diverifikasi dengan benar. Periksa kembali nama, alamat, tanggal, dan informasi lainnya agar tidak terjadi kesalahan atau kekeliruan yang dapat memperlambat proses pengurusan.</p> 
            <p>  4. Pengambilan Nomor Antrian: Saat tiba di kantor Camat, pastikan Anda mengambil nomor antrian untuk pengurusan surat keterangan. Tunggulah giliran Anda dengan sabar dan ikuti petunjuk dari petugas untuk mempermudah proses pelayanan.</p>
            <p> Pemerintah Desa berharap dengan adanya petunjuk teknis ini, masyarakat dapat lebih mudah dan cepat dalam pengurusan surat keterangan yang akan dibawa ke kantor Camat. Diharapkan juga agar masyarakat mematuhi aturan dan prosedur yang telah ditetapkan guna menjaga ketertiban dan kelancaran dalam pelayanan administrasi di kantor Camat. Dengan adanya petunjuk teknis ini, diharapkan proses pengurusan surat keterangan dapat berjalan dengan lebih efisien dan mengurangi kesalahan dalam administrasi.</p>
            <a href="#" class="btn btn-secondary">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
@endsection
