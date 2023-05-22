<!doctype html>
<html lang="en">
  <head>
  	<title>Daftar Akun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="css/registrasi.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/bg1.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
						<div class="w-100">
							<p class="social-media d-flex justify-content-end">
								<img src="img/Nagori Logo.png" alt="" width="70%">
							</p>
						<div>
			      		<div class="w-100">
			      			<h3 class="mb-4 mt-5" ><b>Daftar Akun</b></h3>

						</div>
			      	</div>
					  <form action="#" class="signin-form">
						<div class="form-group mb-3">
							<label class="label" for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" placeholder="Nama" required  id="nama" aria-describedby="nama" name="nama" pattern="^[a-zA-Z\s'-]{1,100}$">
							<p id="invalid-nama" style="display:none;color:red">Masukkan hanya huruf saja </p>
						</div>
						<div class="form-group mb-3">
						  <label class="label" for="username">Username</label>
						<input type="text" class="form-control" placeholder="Username" required id="username" aria-describedby="username" name="username" pattern="^[a-zA-Z0-9_-]{7,15}$">
						<p id="invalid-username" style="display:none;color:red">username maksimal 15 karakter</p>
					  </div>
				  <div class="form-group mb-3">
					  <label class="label" for="nik">NIK</label>
					<input type="text" class="form-control" placeholder="Nomor Induk Keluarga" required  id="nik" aria-describedby="nik" name="nik" pattern="[0-9]{16}$">
					<p id="invalid-nik" style="display:none;color:red">Masukkan 16 karakter</p>
				  </div>
				  <div class="form-group mb-3">
					  <label class="label" for="telepon">Telepon</label>
					<input type="text" class="form-control" placeholder="Nomor Telepon" required id="telepon" aria-describedby="telepon" name="telepon" pattern="^(\+62|0)[2-9][0-9]{10,14}$">
					<p id="invalid-telepon" style="display:none;color:red">Berawalan +62... atau 08...</p>
				  </div>
				  <div class="form-group mb-3">
					  <label class="label" for="email">Email</label>
					<input type="text" class="form-control" placeholder="Email" required id="email" aria-describedby="email" name="email" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+[.]+[a-zA-Z]{2,10}$">
					<p id="invalid-email" style="display:none;color:red">masukkan alamat email dengan berakhiran @gmail.com </p>
				  </div>
				  <div class="form-group mb-3">
					  <label class="label" for="password">Password</label>
						<input type="text" class="form-control" placeholder="Password" required id="password" aria-describedby="password" name="password" pattern="^[a-zA-Z0-9@#$%^&*]{6,20}$">
						<p id="invalid-password" style="display:none;color:red">Masukkan password minimal 6 karakter dan maksimal 20 karakter </p>
				  </div>
				  <div class="form-group mb-3">
					  <label class="label" for="confirpassword">Konfirmasi Password</label>
						<input type="text" class="form-control" placeholder="Confirmation Password" required  id="confirpassword" aria-describedby="confirpassword" name="confirpassword" pattern="^[a-zA-Z0-9@#$%^&*]{6,20}$">
						<p id="invalid-confirpassword" style="display:none;color:red"> Password yang anda masukkan salah  </p>
				  </div>
				</form>
				<div class="form-group">
				  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar Akun</button>
			  </div>
			  <div class="w-75 text-md-right">
				  <p>Sudah punya akun?</p>
			  </div>
			  <div class="form-group">
				  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
			  </div>
			  <div class="form-group d-md-flex">
				  <div class="w-50 text-left">
			  </div>
			</div>
			  </div>
		  </div>
	  </div>
  </section>
<script>
  
</script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/registrasi.js"></script>
  </body>
</html>


