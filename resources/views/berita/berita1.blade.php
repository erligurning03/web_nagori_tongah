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
                      <!-- Berita -->
                      <div class="trending-bottom">
                          <div class="row">
                            @foreach($berita as $data)
                              <div class="col-lg-4">
                              <div class="single-bottom mb-35">
                                  <div class="trend-bottom-img mb-30">
                                    <img src="{{asset('img_berita/'.$data->cover)}}" style="height: 200px;  object-fit: contain; "  alt="Foto Berita" class="img-thumbnail">
                                  </div>
                                  <div class="trend-bottom-cap">
                                      <span class="color4">{{ $data->created_at }}</span>
                                      <h4><a href="{{route('berita.show', $data->id)}}"> {{ $data->judul }}</a></h4>
                                      <p>{{ $data->isi_berita }}</p>
                                  </div>
                              </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </div>

                  <!-- Hoax content -->
                  <div class="col-lg-4 mb-1">
                        <div class="trending-tittle">
                            <strong>Hoax</strong>
                        </div>
                        @foreach($beritahoax as $data)
                      <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                              <img src="{{asset('img_berita/'.$data->cover)}}" width="120" height="100" alt="">
                          </div>
                          <div class="trand-right-cap">
                              <span class="color4">{{ $data->created_at }}</span>
                              <h4><a href="#">{{ $data->judul }}</a></h4>
                          </div>
                      </div>
                      @endforeach
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
  