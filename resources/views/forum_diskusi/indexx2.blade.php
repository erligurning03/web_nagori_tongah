<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forum Diskusi</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Font-Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Font Inter CSS -->
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <style>
    /* CSS untuk menyesuaikan tampilan sidebar */
    .sidebar {
      width: 250px;
      height: 100%;
      position: fixed;
      top: 0;
      left: -250px;
      background-color: #F9F9F9;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      transition: left 0.3s ease;
    }
    
    .sidebar.open {
      left: 0;
    }
    
    .sidebar .close-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }

    .menu {
      list-style: none;
      padding: 0;
    }

    .menu li {
      margin-bottom: 10px;
    }

    .menu li a {
      display: flex;
      align-items: center;
      color: #333;
      text-decoration: none;
    }

    .menu li a .icon {
      margin-left: 20px;
      margin-right: 10px;
      background-color: #EBEBEB;
      border-radius: 50%;
      width: 35px;
      padding: 10px;
    }
    
    /* CSS untuk menyesuaikan tampilan konten */
    .content {
      transition: margin-left 0.3s ease;
    }
    
    .content.open {
      margin-left: 0;
      transition: margin-left 0.3s ease;
    }
    
    /* CSS tambahan untuk tampilan pada ukuran hp */
    @media (max-width: 767.98px) {
      .sidebar {
        width: 100%;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        transition: left 0.3s ease;
      }
      
      .sidebar.open {
        left: 100%;
      }
      
      .content {
        transition: none;
      }
      
      .toggle-btn {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 999;
      }
    }
  </style>
</head>
<body style="font-family: 'Inter">
  <!-- Toggle Button -->
  <button class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
  <button class="toggle-button-close" onclick="toggleSidebar()"><i class="fas fa-times"></i></button>
    <ul class="menu">
        <li><a href="#"><i class="fa-solid fa-house icon"></i>Utama</a></li>
        <li><a href="#"><i class="fa-solid fa-pen-to-square icon"></i>Postingan Anda</a></li>
        <li><a href="#"><i class="fa-solid fa-book-bookmark icon"></i>Postingan Disimpan</a></li>
        <li><a href="#"><i class="fa-solid fa-heart icon"></i>Postingan Disukai</a></li>
        <li><a href="#"><i class="fa-solid fa-comment icon"></i>Postingan Dikomentari</a></li>
      </ul> 
  </div>

  <!-- Content -->
  <div class="content" id="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper risus non urna efficitur ullamcorper. Aenean ultricies ligula vel justo interdum, nec iaculis lorem luctus. Fusce semper metus vitae velit vulputate pulvinar. Etiam auctor quam quis finibus aliquet. In laoreet elementum condimentum. Nam sagittis consectetur nibh, id tincidunt urna malesuada ac. Aliquam erat volutpat.</p>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function toggleSidebar() {
      var sidebar = document.getElementById("sidebar");
      var content = document.getElementById("content");
      
      sidebar.classList.toggle("open");
      content.classList.toggle("open");
    }
  </script>
</body>
</html>
