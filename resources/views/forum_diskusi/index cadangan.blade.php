<!DOCTYPE html>
<html>
<head>
  <title>Forum Diskusi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('css/forum_diskusi.css') }}">
</head>
<body style="font-family: 'Inter">

<!-- sidebar -->
  <button class="toggle-button-line" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
  <div class="sidebar">
    <div class="sidebar-content">
      <ul class="menu">
        <li><a href="#"><i class="fa-solid fa-house icon"></i>Utama</a></li>
        <li><a href="#"><i class="fa-solid fa-pen-to-square icon"></i>Postingan Anda</a></li>
        <li><a href="#"><i class="fa-solid fa-book-bookmark icon"></i>Postingan Disimpan</a></li>
        <li><a href="#"><i class="fa-solid fa-heart icon"></i>Postingan Disukai</a></li>
        <li><a href="#"><i class="fa-solid fa-comment icon"></i>Postingan Dikomentari</a></li>
      </ul>
    </div>
    <button class="toggle-button-close" onclick="toggleSidebar()"><i class="fas fa-times"></i></button>
  </div>

  <!-- container tengah -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto">
        <!-- Konten Anda di sini -->
      </div>
    </div>
  </div>


  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('open');
    }
  </script>
</body>
</html>
