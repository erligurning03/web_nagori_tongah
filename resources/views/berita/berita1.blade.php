@extends('layouts.navbar_warga')
@section('css')
        <!-- <link rel="manifest" href="site.webmanifest"> -->
		<!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/flaticon.css">
            {{-- <link rel="stylesheet" href="css/animate.min.css"> --}}
            <link rel="stylesheet" href="css/magnific-popup.css">
            <link rel="stylesheet" href="css/fontawesome-all.min.css">
            {{-- <link rel="stylesheet" href="css/themify-icons.css"> --}} -->
            <link rel="stylesheet" href="css/style.css">
@endsection
@section('container')

    <div class="trending-area fix">
      <div class="container">
          <div class="trending-main">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="trending-tittle">
                          <strong>Berita Terkini</strong>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8">
                      {{-- <div class="trending-top mb-30">
                          <div class="trend-top-img">
                              <img src="img/berita/berita1.jpg" alt="">
                              <div class="trend-top-cap">
                                  <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                  <h5>12 april 2023</h5>
                                  <span>Hiburan yang dibuat oleh rakyat</span>
                              </div>
                          </div>
                      </div> --}}
                      <!-- Trending Bottom -->
                      
                      <div class="trending-bottom">
                          <div class="row">
                            <!-- @foreach($berita as $data)
                              <div class="col-lg-4">
                              <div class="single-bottom mb-35">
                                  <div class="trend-bottom-img mb-30">
                                    <img src="{{asset('img_berita/'.$data->foto)}}" style="width: 200px; object-fit: contain; "  alt="Foto Berita" class="img-thumbnail">
                                  </div>
                
                                    
                                  <div class="trend-bottom-cap">
                                      <span class="color4">{{ $data->created_at }}</span>
                                      <h4><a href="#"> {{ $data->judul }}</a></h4>
                                      <p>{{ $data->isi_berita }}</p>
                                  </div>
        
                              </div>
                              </div>
                              @endforeach -->
                              <div class="col-lg-4">
                                  <div class="single-bottom mb-35">
                                      <div class="trend-bottom-img mb-30">
                                          <img src="img_berita/blt.png" alt="">
                                      </div>
                                      <div class="trend-bottom-cap">
                                          <span class="color4">Diunggah 30 november 2022</span>
                                          <h4><h4><a href="#"> BLT Dana Desa Mulai Diberikan April 2023 Hingga Juni 2023</a></h4></h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4">
                                  <div class="single-bottom mb-35">
                                      <div class="trend-bottom-img mb-30">
                                          <img src="img_berita/fesbud.png" alt="">
                                      </div>
                                      <div class="trend-bottom-cap">
                                          <span class="color4">Diunggah 30 mei 2023</span>
                                          <h4><a href="#"> Pesona Budaya Batak Toba Lewat Desa Nagori NagoriTongah</a></h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Riht content -->
                  <div class="col-lg-4 mb-1">
                        <div class="trending-tittle">
                            <strong>Hoax</strong>
                        </div>
                      <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                              <img src="img_berita/hoax1.png" width="120" height="100" alt="">
                          </div>
                          <div class="trand-right-cap">
                              <span class="color4">Diunggah 12 mei 2023</span>
                              <h4><a href="details.html">Telah terjadi pencurian 1 unit motor</a></h4>
                          </div>
                      </div>
                      <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                            <img src="img_berita/hoax2.png" width="120" height="100" alt="">
                          </div>
                          <div class="trand-right-cap">
                              <span class="color4">Diunggah 29 januari 2023</span>
                              <h4><a href="details.html">Kekerasan dalam rumah tangga kembali terjadi di desa nagori</a></h4>
                          </div>
                      </div>
                      <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                            <img src="img_berita/hoax3.png" width="120" height="100" alt="">
                          </div>
                          <div class="trand-right-cap">
                              <span class="color4">Diunggah 02 maret 2023</span>
                              <h4><a href="details.html">Longsor yang terjadi di desa Nagori NagoriTongah memakan korban</a></h4>
                          </div>
                      </div> 
                      <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                            <img src="img_berita/hoax4.png" width="120" height="100" alt="">
                          </div>
                          <div class="trand-right-cap">
                              <span class="color4">Diunggah 15 april 2023</span>
                              <h4><a href="details.html">Gempa 7,6 SR Mengguncang Desa Nagori NagoriTongah Sumatera Utara</a></h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!-- <script src="./js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="./js/vendor/jquery-1.12.4.min.js"></script>
      <script src="./js/popper.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <script src="./js/owl.carousel.min.js"></script>
      <script src="./js/gijgo.min.js"></script>
      <script src="./js/wow.min.js"></script>
  <script src="./js/animated.headline.js"></script>
      <script src="./js/jquery.magnific-popup.js"></script>
      <script src="./js/jquery.ticker.js"></script>
      <script src="./js/site.js"></script>
      <script src="./js/jquery.scrollUp.min.js"></script>
  <script src="./js/jquery.sticky.js"></script>	
      <script src="./js/plugins.js"></script>
      <script src="./js/main.js"></script> -->
      

@endsection
  