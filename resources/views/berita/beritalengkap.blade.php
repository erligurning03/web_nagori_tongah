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
          <img src="{{asset('img_berita/'.$berita->cover)}}" class="card-img-top" alt="Image">
          <div class="card-body">
            <h5 class="card-title"><b>{{ $berita->judul }}</b></h5>
            <p class="card-text">{{ $berita->created_at }}</p>
            <p class="card-text">{{ $berita->isi_berita }}</p>
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
