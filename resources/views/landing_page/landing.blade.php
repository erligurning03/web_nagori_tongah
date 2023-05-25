<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- ini adalah css user defind --}}
    <link href="{{ asset('css/style_landing.css') }}" rel="stylesheet">
    {{-- font awesome untuk icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Nagori NagoriTongah</title>
  </head>
  <body>
        <!-- navbar -->
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
                    <a href="{{ route('login') }}"><button class="btn btn-primary me-md-2" type="button" style="background-color:#3A655D;">MASUK</button></a>
                    <a href="{{ route('register') }}"><button class="btn btn-primary" type="button" style="background-color:#2B2B2B;">DAFTAR</button></a>
                  </div>
                </ul>
              </div>
            </div>
          </nav>
          <!-- end of navbar -->

          
        <!-- start jumbotron -->
        <section class="jumbotron text-center my-5">
            <div class="container">
                <div class="row">
                    <div class="col-8 mx-auto">
                        <h1 style="text-align: left; color: #ffffff;">NAGORI NAGORITONGAH</h1>
                        <br>
                        <p style="text-align: left;">Nagori Nagoritongah adalah sebuah desa di Sumatera Utara dengan keindahan alam dan masyarakat yang ramah. Terdapat berbagai destinasi wisata seperti air terjun, hutan pinus, dan kebun teh yang menarik untuk dikunjungi.</p>
                    </div>
                    <div class="col-4">
                        <img src="../img/Component5.png" class="card-img-top" alt="...">
                    </div>
                </div>
                <br><br><br><br>
                <div class="row d-flex flex-wrap">
                  <div class="card-group">
                    <div class="col-sm-2 mx-auto">
                        <div class="card">
                          <div class="card-body text-center">
                            <img src="img/4.png" class="card-img-top" alt="...">
                            <h5 class="card-title"><b>pengurusan berkas</b></h5>
                            <p class="card-text">Keperluan pengurusan berkas seperti KTP, KK, dan lain sebagainya.</p>
                            <a href="#" class="btn btn-primary">selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mx-auto">
                        <div class="card">
                          <div class="card-body text-center">
                            <img src="img/1.png" class="card-img-top" alt="...">
                            <h5 class="card-title"><b>Forum Diskusi</b></h5>
                            <p class="card-text">Untuk berbagi informasi, ide, pendapat, dan tempat pengaduan</p>
                            <a href="#" class="btn btn-primary">selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mx-auto">
                        <div class="card">
                          <div class="card-body text-center">
                            <img src="img/2.png" class="card-img-top" alt="...">
                            <h5 class="card-title"><b>Wisata Nagori</b></h5>
                            <p class="card-text">Kumpulan informasi terkait wisata yang terdapat di Nagori</p>
                            <a href="#" class="btn btn-primary">selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mx-auto">
                        <div class="card">
                          <div class="card-body text-center">
                            <img src="img/3.png" class="card-img-top" alt="...">
                            <h5 class="card-title"><b>UMKM Nagori</b></h5>
                            <p class="card-text">Kumpulan UMKM yang terdapat di Nagori, daftarkan UKMK Anda!</p>
                            <a href="#" class="btn btn-primary">selengkapnya</a>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-2 mx-auto">
                        <div class="card">
                          <div class="card-body text-center">
                            <img src="img/4.png" class="card-img-top" alt="...">
                            <h5 class="card-title"><b>Transparansi Dana</b></h5>
                            <p class="card-text">Informasi pendapatan dan pengeluaran Dana pertahun dan realisasinya.</p>
                            <a href="#" class="btn btn-primary">selengkapnya</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <p class="lead">Junior Web Developer</p> -->
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,224L26.7,218.7C53.3,213,107,203,160,181.3C213.3,160,267,128,320,117.3C373.3,107,427,117,480,149.3C533.3,181,587,235,640,240C693.3,245,747,203,800,192C853.3,181,907,203,960,218.7C1013.3,235,1067,245,1120,245.3C1173.3,245,1227,235,1280,213.3C1333.3,192,1387,160,1413,144L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg> --}}
        </section>
        <!-- end jumbotron -->

        {{-- start section 2 --}}
      
        <section id="visi">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h1>VISI MISI</h1>
              </div>
            </div>
            <div class="row justify-content-center fs-5 ">
              <div class="col-md-4 text-center">
                <img src="../img/component_4.png" class="card-img-top" alt="...">
              </div>
              <div class="col-md-4 text-center">
                  <h2>VISI</h2>
                  <p>Meningkatkan kesejahteraan masyarakat yang bermartabat dan religius dengan mengembangkan potensi sumber daya. </p>
              </div>
              <div class="col-md-4 text-center">
                  <h2>MISI</h2>
                  <P>Memberikan pelayanan yang positif kepada masyarakat dan membuat rencana pembangunan diberbagai sektor baik pertanian maupun perekonomian</P>
              </div>
            </div>
          </div>
          {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#add8e6" fill-opacity="1" d="M0,288L26.7,261.3C53.3,235,107,181,160,144C213.3,107,267,85,320,101.3C373.3,117,427,171,480,192C533.3,213,587,203,640,176C693.3,149,747,107,800,112C853.3,117,907,171,960,186.7C1013.3,203,1067,181,1120,181.3C1173.3,181,1227,203,1280,208C1333.3,213,1387,203,1413,197.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg> --}}
        </section>
    
        {{-- end section 2  --}}

        {{-- start section 3 --}}
        <section class="perangkat">
          <div class="container">
            <div class="row">
              <h1><b>STRUKTUR PERANGKAT DESA</b></h1>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gaby Manurung.</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div><br>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/Perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kepala Desa</h5>
                    <h5 class="card-text">Gideon Manurung.</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- end section 3 --}}

        {{-- start section 4 --}}
        <section class="berita">
          <div class="container">
            <div class="row margin-buttom:20px">
              <h1><b>BERITA</b></h1>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/berita1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/berita1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/berita1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/berita1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/berita1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 mx-auto">
                <div class="card text-center">
                  <img src="../img/perangkat1.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Wakil Kepala Desa</h5>
                    <h5 class="card-text">Putri Nisa.</h5>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-outline-primary" style="text-align: center">Selengkapnya ➞</button>
            </div>
            
          </div>
        </section>
        {{-- end of section 4 --}}
      





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>