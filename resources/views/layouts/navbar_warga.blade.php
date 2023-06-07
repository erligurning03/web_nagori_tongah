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
    <img src="{{ asset('img/logo-desa.png') }}" alt="Logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <b><a class="nav-link" href="{{ route('dashboard') }}">Nagori NagoriTongah</a></b>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown me-auto mt-1">
          <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layanan
          </a>
          <div class="dropdown-menu" aria-labelledby="layananDropdown">
            <a class="dropdown-item" href="{{ route('pengajuan') }}">Pengurusan Berkas</a>
            <a class="dropdown-item" href="{{ route('posts.index') }}">Forum Diskusi</a>
            <a class="dropdown-item" href="{{ route('umkm.index') }}">UMKM Nagori</a>
            <a class="dropdown-item" href="{{ route('transparasi') }}">Transparansi Dana</a>
            <a class="dropdown-item" href="{{ route('galeri_dash') }}">Galeri Desa</a>
          </div>
        </li>    
        <li class="nav-item dropdown me-auto">
          <div class="nav-link dropdown" href="#" id="ProfileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="fals">
          <div class="profile-picturee">
          @php
            $user = \App\Models\User::where('nik', Auth::user()->nik)->first();
            @endphp
              <img src="{{  asset('img/foto_profile/'.$user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:40px; height: 40px; border: 1px solid black; ">
            </div>
          </div>
          <div class="dropdown-menu" aria-labelledby="layananDropdown">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profile</a>
            <a class="dropdown-item" href="#">Notifikasi Saya</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>        
        <li class="nav-item mt-1">
          <a class="nav-link" href="{{ route('profile.edit') }}">{{ $user->username }}</a>
        </li>
      </ul>
    </div>
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="darkModeToggle">
      <label class="form-check-label" for="darkModeToggle">Dark Mode</label>
    </div>
  </div>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika Anda ingin mengakhiri sesi Anda</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  @yield('javascript')
</body>

</html>