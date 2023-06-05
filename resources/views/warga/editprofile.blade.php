@extends('layouts.navbar_warga')
@section('css')
<style>
    .body{font-family: 'Lato'};
</style>
@endsection
@section('container');
    <br>
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h6 class="card-title text-capitalize">Ubah Data</h6>
                </div>
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="foto_profil">Foto Profil</label> <br>
                                    @if($user->foto_profil)
                                    <img src="{{ asset('img/foto_profile/'.$user->foto_profil) }}" style="width: 200px; height: 200px;" alt="Foto Profil" class="img-thumbnail">
                                    @else
                                    <div class="alert alert-warning">Belum ada foto profil. Pilih gambar untuk mengunggah.</div>
                                    @endif
                                    <input type="file" name="foto_profil" id="foto_profil" class="form-control-file" accept=".jpg, .jpeg, .png, .gif, .img" required>
                                    @error('foto_profil')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
    
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
    
                                <br>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
                <br>
    
                <div class="card card-primary">
                    <div class="card-header">
                        <h6 class="card-title text-capitalize">Ubah Password</h6>
                    </div>
                    <form action="{{route('profile.updatePassword')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_lama">Password Lama</label>
                                        <input id="password_lama" type="password" class="form-control" name="password_lama" autocomplete="old-password">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="password">Password Baru</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                    </div>
    
                                    <div class="form-group">
                                        <label for="password_confirmation">Konfirmasi Password</label>
                                        <input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                                    </div>
    
                                    <br>
                                    <button type="submit" class="btn btn-primary">Ubah Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
    
            </div>
            <br>
    
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
        </div>
    </div>  

    </div>  

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/registrasi.js"></script>
    
@endsection