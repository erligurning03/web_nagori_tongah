<!DOCTYPE html>
<html>
<head>
  <title>Halaman Utama</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .sidebar {
      width: 250px;
      height: 100%;
      position: fixed;
      top: 0;
      left: -250px;
      background-color: #f1f1f1;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      transition: left 0.3s ease;
    }

    .sidebar-content {
      padding: 20px;
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
      margin-right: 10px;
    }

    .toggle-button-line {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 20px;
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .toggle-button-close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 20px;
      background-color: transparent;
      border: none;
      cursor: pointer;
    }

    .sidebar.open {
      left: 0;
    }
  </style>
</head>
<body>
  <button class="toggle-button-line" onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
  <div class="sidebar">
    <div class="sidebar-content">
      <ul class="menu">
        <li><a href="#"><i class="fas fa-home icon"></i>Utama</a></li>
        <li><a href="#">Profil</a></li>
      </ul>
    </div>
    <button class="toggle-button-close" onclick="toggleSidebar()"><i class="fas fa-times"></i></button>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('open');
    }
  </script>
</body>
</html>
