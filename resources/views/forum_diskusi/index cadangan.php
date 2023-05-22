<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum Diskusi</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="{{ asset('css/forum_diskusi.css') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Font-Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Font Inter CSS -->
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body style="font-family: 'Inter">

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Tutup &times;</button>
  <ul class="menu mt-2">
        <li><a href="#"><i class="fa-solid fa-house icon"></i>Utama</a></li>
        <li><a href="#"><i class="fa-solid fa-pen-to-square icon"></i>Postingan Anda</a></li>
        <li><a href="#"><i class="fa-solid fa-book-bookmark icon"></i>Postingan Disimpan</a></li>
        <li><a href="#"><i class="fa-solid fa-heart icon"></i>Postingan Disukai</a></li>
        <li><a href="#"><i class="fa-solid fa-comment icon"></i>Postingan Dikomentari</a></li>
      </ul> 
</div>

<!-- Page Content -->
<div class="w3-white">
  <button class="w3-button w3-white w3-xlarge" onclick="w3_open()">☰</button>
  <!-- container tengah -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto">
        <div class="box" style="width: 100%; height: 50px;">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span>Tambahkan postingan</span>
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <div class="box mt-3" style="width: 50%;">
            <a href="#">
                <input type="text" placeholder="Cari judul postingan...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        @foreach($posts as $post)
        <div class="box2 mt-5">
            <div class="post-header">
                <img src="img/foto_profil.jpg" alt="Foto Profil" class="profile-picture">
                <div class="post-info">
                    <span style="font-weight: bold;">{{ $post->user->nama_lengkap }}</span>
                    <span>{{ $post->created_at->diffForHumans() }}</span>
                </div>
            </div>
            <div class="post-content">
              <h4>{{ $post->judul }}</h4>
                <p>{{ $post->isi_post }}</p>
            </div>

            <div class="post-actions" style="justify-content: space-between;">
                <div>
                <i class="fas fa-heart fa-xl love-icon action-icon" onclick="toggleLove(this)"></i>
                <i class="far fa-comment fa-xl action-icon"></i>
                <i class="far fa-bookmark fa-xl action-icon"></i>
                <i class="far fa-flag fa-xl action-icon"></i>
                </div>
                <p>{{ $post->created_at->isoFormat('dddd, D MMMM YYYY') }}</p>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-l">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
          </div>
          <div class="mb-3">
            <label for="isi_post" class="form-label">Isi Post</label>
            <textarea class="form-control" id="isi_post" name="isi_post" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function toggleLove(icon) {
      icon.classList.toggle("filled");
}
</script>
     
</body>
</html> 
