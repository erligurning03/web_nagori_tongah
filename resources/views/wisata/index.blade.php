<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/wisata.css') }}">
    <title>Wisata</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background: #C6C6C6;
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
      </nav>
      <!-- end of navbar -->
   
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/bis.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

<!-- card -->
<div class="row justify-content-center">
<div class="card shadow">
    <img src="img/1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Bukit Indah Simarjarunjung</h4>
      <p class="card-text">Bukit Simarjarunjung adalah tempat wisata alam di Nagori Parik Sabungan, Kecamatan Dolok Pardamean, Kabupaten Simalungun. Bukit Simarjarunjung memiliki ketinggian 1.300 meter dari permukaan laut.</p>
      <p class="card-text"><img src="img/icon.png" alt=""><small class="text-muted">Jl. Simarjarunjung, Butu Bayu Pane Raja</small></p>
    </div>
  </div>
  <div class="card mt-5 shadow">
    <img src="img/2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Kebun Teh Bahbutong</h4>
      <p class="card-text">Kebun teh milik perusahaan PTPN IV Bah Butong dan Tobasari merupakan kebun teh terbesar nomor 2 di Indonesia. Begitu Luasnya kebun teh tersebut hingga dibagi 3 lokasi kawasan wisata yakni kebun teh Tobasari, kebun teh Bah Butong dan kebun teh Teh Sidamanik.</p>
      <p class="card-text"><img src="img/icon.png"><small class="text-muted">Jl. Simarjarunjung, Butu Bayu Pane Raja</small></p>
    </div>
  </div>
  <div class="card mt-5 shadow">
    <img src="img/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">Air Terjun Bah Biak</h4>
      <p class="card-text">Air Terjun Bah Biak Sidamanik terletak di Desa Bahbutong, Sidamanik, Simalungun, Sumatra Utara. Tepatnya 15 kilometer dari kota Pematang Siantar.</p>
      <p class="card-text"><img src="img/icon.png"><small class="text-muted">Desa Bah Butong, Kecamatan Sidamanik</small></p>
    </div>
  </div>
</div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>