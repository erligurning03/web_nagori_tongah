@extends('layouts.navbar_warga')
@section('css')
<style>
    .body{font-family: 'Lato'};
</style>
@endsection
@section('container');
    <br>
    <div class="container">
        <div class="col-md-8 mx-auto" mx-auto>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
        
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" id="nik" value="{{ $user->nik }}" class="form-control" readonly>
            </div>            
        
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $user->nama_lengkap }}" class="form-control" pattern="^[a-zA-Z\s'-]{1,100}$">
                <p id="invalid-nama" style="display:none;color:red">Masukkan hanya huruf saja</p>
            </div>
        
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="{{ $user->username }}" class="form-control" pattern="^[a-zA-Z0-9_-]{4,16}$">
                <p id="invalid-username" style="display:none;color:red">Username maksimal 16 karakter</p>
            </div>
        
            {{-- <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ $user->password }}" autocomplete="off">
            </div> --}}

            <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input type="password" id="passwordInput" class="form-control" value="{{ $user->password }}"  required aria-describedby="password" name="password" pattern="^[a-zA-Z0-9@#$%^&*]{6,20}$">
                <p id="invalid-password" style="display:none;color:red">Masukkan password minimal 6 karakter dan maksimal 20 karakter</p>
            </div>
            <div class="form-group mb-3">
                <label class="label" for="confirmPassword">Konfirmasi Password</label>
                <input type="password" id="confirmPasswordInput" class="form-control" value="{{ $user->password }}" required aria-describedby="confirmPassword" name="confirmPassword" pattern="^[a-zA-Z0-9@#$%^&*]{6,20}$">
                <p id="invalid-confirmPassword" style="display:none;color:red">Password yang anda masukkan tidak sama</p>
            </div>
        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" pattern="^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+[.]+[a-zA-Z]{2,10}$">
                <p id="invalid-email" style="display:none;color:red">Gunakan @gmail.com ... atau @yahoo.com... atau @students.ac.id</p>
            </div>
        
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ $user->telepon }}" class="form-control" pattern="^(\+62|0)[2-9][0-9]{10,14}$">
                <p id="invalid-telepon" style="display:none;color:red">Gunakan +62... atau 08...</p>
            </div>
        
            <div class="form-group">
                <label for="foto_profil">Foto Profil</label>
                @if($user->foto_profil)
                    <img src="{{ asset('img/'.$user->foto_profil) }}" alt="Foto Profil" class="img-thumbnail">
                @else
                    <div class="alert alert-warning">Belum ada foto profil. Pilih gambar untuk mengunggah.</div>
                @endif
                <input type="file" name="foto_profil" id="foto_profil" class="form-control-file" accept=".jpg, .jpeg, .png, .gif, .img" required>
                @error('foto_profil')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <br>
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        </div>
    </div>  

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/registrasi.js"></script>
    <script>
      document.getElementById("btnSubmit").addEventListener("click", function (event) {
        var password = document.getElementById("passwordInput").value;
        var confirmPassword = document.getElementById("confirmPasswordInput").value;
  
        if (password !== confirmPassword) {
          document.getElementById("invalid-confirmPassword").style.display = "block";
          event.preventDefault();
        } else {
          document.getElementById("invalid-confirmPassword").style.display = "none";
        }
      });
    </script>

    
@endsection