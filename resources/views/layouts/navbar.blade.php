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
    {{-- ini adalah AOS untuk animasi website --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Nagori NagoriTongah</title>
  </head>
  <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top">
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
                    <a class="nav-link active" aria-current="page" href="#utama"><b>Utama</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#fitur">Fitur</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#visimisi">Visi Misi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#perangkat">Perangkat Desa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#berita">Berita</a>
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
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- ini adalah script untuk AOS untuk animasi website --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>