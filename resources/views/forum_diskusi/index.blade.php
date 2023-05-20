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
            <a href="#">
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
        <div class="box2 mt-5">
            <div class="post-header">
                <img src="img/foto_profil.jpg" alt="Foto Profil" class="profile-picture">
                <div class="post-info">
                    <span>Putrija Malau</span>
                    <span>3 jam lalu</span>
                </div>
            </div>
            <div class="post-content">
                <p>Hi semua warga Nagori Nagoritongah! Saya ingin memberitahu bahwa saya sedang membuka lowongan pekerjaan. Jika sedang mencari pekerjaan, jangan ragu untuk menghubungi saya di nomor WhatsApp: 087866332211. </p>
            </div>

            <div class="post-actions" style="justify-content: space-between;">
                <div>
                <i class="fas fa-heart love-icon action-icon" onclick="toggleLove(this)"></i>
                <i class="far fa-comment action-icon"></i>
                <i class="far fa-bookmark action-icon"></i>
                <i class="far fa-flag action-icon"></i>
                </div>
                <p style="">Senin, 5 Mei 2023</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


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
