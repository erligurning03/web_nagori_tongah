@extends('admin.layouts.navbar')
@section('container')
    <br>
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h6 class="card-title text-capitalize">Ubah Data</h6>
                </div>
                <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div id="error-alert" class="alert alert-danger" style="display: none;"></div>

                                <div class="form-group">
                                    <label for="foto_profil">Foto Profil</label> <br>
                                    @if($user->foto_profil)
                                    <img src="{{ asset('img/foto_profile/'.$user->foto_profil) }}" style="height: 200px;" alt="Foto Profil" class="img-thumbnail">
                                    @else
                                    <div class="alert alert-warning">Belum ada foto profil. Pilih gambar untuk mengunggah.</div>
                                    @endif
                                    <input type="file" name="foto_profil" id="foto_profil" class="form-control-file" accept=".jpg, .jpeg, .png, .gif, .img" >
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
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $user->nama_lengkap }}" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" value="{{ $user->username }}" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
                                </div>
    
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" name="telepon" id="telepon" value="{{ $user->telepon }}" class="form-control">
                                </div>
    
                                <br>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div> <br>

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div id="error-alert" class="alert alert-danger" style="display: none;"></div>

                            </div>
                        </div>
                    </div>
                </form>
    
                <div class="card card-primary">
                    <div class="card-header">
                        <h6 class="card-title text-capitalize">Ubah Password</h6>
                    </div>
                    <form action="{{route('admin.updatePassword')}}" method="post">
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
    
            {{-- @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif --}}


            {{-- @if($errors->any())
            <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    {{ $error }}
                    @endforeach                
            </div>
            @endif --}}
        </div>
    </div>  

    </div>  

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/registrasi.js"></script>

    <script>
        @if($errors->any())
            var errorAlert = document.getElementById('error-alert');
            errorAlert.innerHTML = '<ul>' + @json($errors->all()).map(function (error) {
                return '<li>' + error + '</li>';
            }).join('') + '</ul>';
            errorAlert.style.display = 'block';
        @endif
    </script>
    
    
@endsection