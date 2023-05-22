<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/forum_diskusi.css') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Font-Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0;
}

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 100vh;
  top: 0;
  left: 0;
  background-color: #F9F9F9;
  overflow-x: hidden;
  overflow-y: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px;
  text-decoration: none;
  font-size: 18px; /* Mengubah ukuran font menjadi 18px */
  color: #000000;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  background-color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #F9F9F9;
  margin: 10px;
  border-radius: 10px; /* Membuat sudut melengkung */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
}

.openbtn:hover {
  background-color:#f1f1f1;
}

.icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #999999;
  text-align: center;
  line-height: 40px;
  margin-right: 8px;
}

.icon i {
  color: white;
}
</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#"><span class="icon"><i class="fas fa-house"></i></span>Utama</a>
  <a href="#"><span class="icon"><i class="fas fa-pen-to-square"></i></span>Postingan Anda</a>
  <a href="#"><span class="icon"><i class="fas fa-book-bookmark"></i></span>Postingan Disimpan</a>
  <a href="#"><span class="icon"><i class="fas fa-heart"></i></span>Postingan Disukai</a>
  <a href="#"><span class="icon"><i class="fas fa-comment"></i></span>Postingan Dikomentari</a>
</div>

<button class="openbtn" onclick="openNav()">☰ Sidebar</button>  
<!-- Page Content -->
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
                    <span style="font-weight: normal;">{{ $post->created_at->diffForHumans() }}</span>
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
      <input type="file" class="form-control" id="gambar" name="gambar[]" onchange="previewImages(event)" required multiple>
    </div>
    <div id="imagePreview"></div>
    <button type="button" class="btn btn-primary mt-3" onclick="addMorePhotos()">Tambahkan Foto Lagi</button>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>
    </div>
  </div>
</div>

<!-- script untuk preview image  -->
<script>
  function previewImages(event) {
    var imagePreview = document.getElementById('imagePreview');
    imagePreview.innerHTML = '';

    var files = event.target.files;
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var reader = new FileReader();

      reader.onload = function (e) {
        var image = document.createElement('img');
        image.src = e.target.result;
        image.classList.add('preview-image');
        imagePreview.appendChild(image);
      };

      reader.readAsDataURL(file);
    }
  }

  function addMorePhotos() {
    var fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.name = 'gambar[]';
    fileInput.classList.add('form-control');
    fileInput.setAttribute('onchange', 'previewImages(event)');
    fileInput.required = true;
    fileInput.multiple = true;

    var fileInputContainer = document.createElement('div');
    fileInputContainer.classList.add('mb-3');
    fileInputContainer.appendChild(fileInput);

    var imagePreview = document.getElementById('imagePreview');
    imagePreview.appendChild(fileInputContainer);
  }
</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

function toggleLove(icon) {
      icon.classList.toggle("filled");
}
</script>
   
</body>
</html> 
