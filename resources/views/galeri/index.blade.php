<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Font-Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">    <title>Galeri</title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <style>
    .thumbnail {
      margin-top: 10px;
      height: 250px;
      width: 250px;
      cursor: pointer;
    }
  </style>
   
</head>
<body style="font-family: 'Lato'">
  <div class="container">
    <h1 class="text-center mt-4">Galeri Desa</h1>
    <div class="row">
      <div class="col-md-3 col-sm-6 d-flex justify-content-center">
        <img class="thumbnail mx-auto" src="img/foto 1.jfif" alt="Gambar 1" data-toggle="modal" data-target="#modal1">
      </div>
      <div class="col-md-3 col-sm-6 d-flex justify-content-center">
        <img class="thumbnail mx-auto" src="img/foto 1.jfif" alt="Gambar 1" data-toggle="modal" data-target="#modal1">
      </div>
      <div class="col-md-3 col-sm-6 d-flex justify-content-center">
        <img class="thumbnail mx-auto" src="img/foto 1.jfif" alt="Gambar 1" data-toggle="modal" data-target="#modal1">
      </div>
      <div class="col-md-3 col-sm-6 d-flex justify-content-center">
        <img class="thumbnail mx-auto" src="img/foto 1.jfif" alt="Gambar 1" data-toggle="modal" data-target="#modal1">
      </div>
    </div>
  </div>

  <!-- Modal 1 -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal1Label">Gambar 1</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="gambar1.jpg" alt="Gambar 1" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal2Label">Gambar 2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="gambar2.jpg" alt="Gambar 2" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal 3Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal3Label">Gambar 3</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="gambar3.jpg" alt="Gambar 3" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal4Label">Gambar 4</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="gambar4.jpg" alt="Gambar 4" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>