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
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <div class="card">
          <img src="{{asset('img_berita/'.$berita->cover)}}" class="card-img-top" alt="Image">
          <div class="card-body">
            <h5 class="card-title"><b>{{ $berita->judul }}</b></h5>
            <p class="card-text">{{ $berita->created_at }}</p>
            <p class="card-text">{{ $berita->isi_berita }}</p>
            <a href="{{ route('berita.berita1') }}" class="btn btn-secondary">Kembali</a>
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
