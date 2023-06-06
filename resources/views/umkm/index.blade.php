@extends('layouts.navbar_warga')
@section('css')
  <style>
    .card {
      margin-bottom: 20px;
    }
    .background{
        background-color: gray;
    }
  </style>
@endsection
@section('container')
<body>
  <h1 class="text-center mt-3">Daftar UMKM Desa Nagori</h1>
      <div class="container">
        <div class="row">
          {{-- <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm1.png" class="card-img-top" alt="Gambar 1">
              <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-shop"></i><b>  Fresh Mart</b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>  Jalan Arteri Raya No.17</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i> 0812-2671-9243 (Antonio Saragih)</p>
                <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div> --}}
          
          @foreach($umkm as $data)
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm3.png" class="card-img-top" alt="Gambar 2">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-utensils"></i><b> {{ $data->nama_usaha }}</b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i> {{ $data->alamat }}</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i> {{ $data->telepon }}</p>
                <p class="card-text">{{ $data->deskripsi }}</p>
              </div>
            </div>
          </div>
          @endforeach
          {{-- @foreach ($umkm as $data)


          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm3.png" class="card-img-top" alt="Gambar 3">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-cake-candles"></i><b>{{ $data->nama_usaha }} </b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>{{ $data->alamat}}</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i> {{ $data->telepon}}</p>
                <p class="card-text">{{ $data-> }}</p>
              </div>
            </div>
          </div>
          @endforeach --}}
        </div>

        {{-- <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm4.png" class="card-img-top" alt="Gambar 4">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-shop"></i><b> Mitra Tani</b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>  Jalan Rajamin Purba No. 21</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i> 0821-7628-0971 (Hasian Damanik)</p>
                <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm5.png" class="card-img-top" alt="Gambar 5">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-shop"></i><b>  Toko Sinar Jaya</b></h5>
                  <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>  Jalan Rajawali No. 63</p>
                  <p class="card-text"><i class="fa-solid fa-phone-volume"></i> 0813-1267-8125 (Marito Sinaga)</p>
                  <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm6.png" class="card-img-top" alt="Gambar 5">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-shop"></i><b>  Subur Pupuk</b></h5>
                  <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>  Jalan Rajawali No. 3</p>
                  <p class="card-text"><i class="fa-solid fa-phone-volume"></i> 0813-7373-9271 (Anggara Manik)</p>
                  <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div>
        </div> --}}
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
    