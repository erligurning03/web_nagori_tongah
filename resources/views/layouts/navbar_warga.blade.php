<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- ini adalah css user defind -->
  <link href="{{ asset('css/navbar_warga.css') }}" rel="stylesheet">
  <!-- font awesome untuk icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Font Lato -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <!-- icon bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" rel="stylesheet">
  <title>Nagori NagoriTongah</title>
  @yield('css')
</head>

<body>
<nav class="navbar navbar-expand-md navbar-light fixed-top">
  <div class="container">
    <img src="img/logo-desa.png" alt="Logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <b><a class="nav-link" href="#">Nagori NagoriTongah</a></b>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pengajuan') }}">Pengurusan Berkas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('posts.index') }}">Forum Diskusi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Wisata Nagori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">UMKM Nagori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Transparansi Dana</a>
        </li>
        <li class="nav-item">
          <div class="nav-link">
          <div class="profile-picture">
          @php
            $user = \App\Models\User::where('nik', Auth::user()->nik)->first();
            @endphp
              <img src="{{ asset('img/'.$user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">{{ $user->nama_lengkap }}</a>
        </li>
      </ul>
    </div>
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="darkModeToggle">
      <label class="form-check-label" for="darkModeToggle">Dark Mode</label>
    </div>
  </div>
</nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    darkModeToggle.addEventListener('change', () => {
      if (darkModeToggle.checked) {
        body.classList.add('dark-mode');
      } else {
        body.classList.remove('dark-mode');
      }
    });
  </script>

  <!-- end of navbar -->
  <div class="belakang">
  @yield('container')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  @yield('javascript')
</body>

</html>