<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>UMKM Desa</title>
  <style>
    .card {
      margin-bottom: 20px;
    }
    .background{
        background-color: gray;
    }
  </style>
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
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm1.png" class="card-img-top" alt="Gambar 1">
              <div class="card-body">
                    <h5 class="card-title"><i class="fa-solid fa-shop"></i><b>  Fresh Mart</b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>  Jalan Arteri Raya No.17</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i> 0812-2671-9243 (Antonio Saragih)</p>
                <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm2.png" class="card-img-top" alt="Gambar 2">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-utensils"></i><b>  Sate  Madura</b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i> Jalan Gondang Jati No. 88</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i>  0856-2162-0977 (Imelda Purba)</p>
                <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img src="img/umkm3.png" class="card-img-top" alt="Gambar 3">
              <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-cake-candles"></i><b>  Amanda</b></h5>
                <p class="card-text"><i class="fa-sharp fa-solid fa-location-dot"></i>  Jalan Mawar No. 03</p>
                <p class="card-text"><i class="fa-solid fa-phone-volume"></i> 0822-2120-0003 (Amanda Naibaho)</p>
                <p class="card-text">Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
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
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    