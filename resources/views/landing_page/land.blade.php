<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- ini adalah css user defind --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- font awesome untuk icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Nagori NagoriTongah</title>
  </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background: #C6C6C6;">
            <div class="container">
              <a class="navbar-brand" href="#">Nagori NagoriTongah</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home"><b>Utama</b></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="layananDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#wisata">Wisata</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                      <button class="btn btn-primary me-md-2" type="button" style="background-color:#3A655D;">Masuk</button>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                      <button class="btn btn-primary" type="button" style="background-color:#2B2B2B;">Daftar</button>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- section --}}
          <section class="jumbotron text-center my-5" style="background-image:  url('../img/component_3.png'); background-size: cover;">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <h1 class="text-left text-white">NAGORI NAGORITONGAH</h1>
                  <br>
                  <p class="text-left">Nagori Nagoritongah adalah sebuah desa di Sumatera Utara dengan keindahan alam dan masyarakat yang ramah. Terdapat berbagai destinasi wisata seperti air terjun, hutan pinus, dan kebun teh yang menarik untuk dikunjungi.</p>
                </div>
                <div class="col-lg-4">
                  <img src="../img/Component5.png" class="card-img-top" alt="...">
                </div>
              </div>
              <br><br><br><br>
              <div class="row">
                <div class="col-sm-2 mx-auto">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="img/4.png" class="card-img-top" alt="...">
                      <h5 class="card-title"><b>Pengurusan Berkas</b></h5>
                      <p class="card-text">Keperluan pengurusan berkas seperti KTP, KK, dan lain sebagainya.</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 mx-auto">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="img/1.png" class="card-img-top" alt="...">
                      <h5 class="card-title"><b>Forum Diskusi</b></h5>
                      <p class="card-text">Untuk berbagi informasi, ide, pendapat, dan tempat pengaduan</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 mx-auto">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="img/2.png" class="card-img-top" alt="...">
                      <h5 class="card-title"><b>Wisata Nagori</b></h5>
                      <p class="card-text">Kumpulan informasi terkait wisata yang terdapat di Nagori</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 mx-auto">
                  <div class="card">
                    <div class="card-body text-center">
                      <img src="img/3.png" class="card-img-top" alt="...">
                      <h5 class="card-title"><b>UMKM Nagori</b></h5>
                      <p class="card-text">Kumpulan UMKM yang terdapat di Nagori, daftarkan UKMK Anda!</p>
                      <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 mx-auto">
                    <div class="card">
                      <div class="card-body text-center">
                        <img src="img/4.png" class="card-img-top" alt="...">
                        <h5 class="card-title"><b>Transparansi Dana</b></h5>
                        <p class="card-text">Informasi pendapatan dan pengeluaran Dana pertahun dan realisasinya.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </section>
                  
          
          
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>