<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/cover.png);">
			      </div>
					<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4 mt-5">Masuk Akun</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<img src="img/Logo.png" alt="" width="85%">
									</p>
								</div>
			      	</div>
					  @if(session('success'))
					  <div class="alert alert-success">
						  {{ session('success') }}
					  </div>
				  	@endif				  
					  <form action="{{ route('login_masuk') }}" method="POST" class="signin-form">
                        @csrf
						<div class="form-group mb-3">
							<input type="text" class="form-control" placeholder="Username/NIK" required id="username" aria-describedby="username" name="username" pattern="^[a-zA-Z0-9.]{4,16}$">
						    <p id="invalid-username" style="display:none;color:red">username maks 16 karakter</p>
						</div>
				  <div class="form-group mb-3">
					<input type="password" class="form-control" placeholder="Password" required id="password" aria-describedby="password" name="password" pattern="^[a-zA-Z0-9@#$%^&*]{6,20}$">
					<p id="invalid-password" style="display:none;color:red">password min 6 karakter dan maks 20 karakter </p>
				  </div>
                        {{-- button --}}
				  <div class="form-group">
					  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
				  </div>
				  <div class="form-group">
					  <a class="text-center">Belum Punya Akun?</p>
				  </div>
				  <div class="form-group">
					  <a href ="register" type="submit" class=" button form-control btn btn-primary-1 px-3">Daftar Akun</a>
				  </div>
			</div>
			  </div>
		  </div>
	  </div>
  </section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/login.js"></script>

  </body>
</html>
