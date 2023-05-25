<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengajuan Surat</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <style>
    .card {
      width: 250px;
      height: 250px;
      position: relative;
      background-color: #C9C9C9;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-text {
      flex-grow: 1;
    }

    .btn-bottom {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
    }

    .bgcolorhijau {
      background-color: #3C6255;
      color: white;
    }

    @media (max-width: 576px) {
      .card {
        width: 100%;
      }
    }
  </style>
</head>
<body>
<h1 class="text-center mt-3">Daftar Surat Pemohon</h1>
  <div class="container mt-4">
    <div class="card-container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Judul Card 1</h5>
          <p class="card-text">Deskripsi card 1 yang dibatasi.</p>
          <a href="#" class="btn bgcolorhijau rounded-pill btn-bottom">Ajukan Surat</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Judul Card 2</h5>
          <p class="card-text">Deskripsi card 2 yang dibatasi.</p>
          <a href="#" class="btn bgcolorhijau rounded-pill btn-bottom">Ajukan Surat</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Judul Card 3</h5>
          <p class="card-text">Deskripsi card 3 yang dibatasi.</p>
          <a href="#" class="btn bgcolorhijau rounded-pill btn-bottom">Ajukan Surat</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
