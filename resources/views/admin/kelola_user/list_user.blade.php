
@extends('admin.layouts.navbar')
@section('container')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">List User Desa</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                    </div>

                    {{-- <!-- form search -->
                    <div class="mb-3 d-flex justify-content-end">
                        <form action="{{ route('users.index') }}" method="GET" class="form-inline">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Cari pengguna" value="{{ $searchTerm }}">
                            </div>
                            <div class="form-group ml-2">
                                <button type="submit" class="btn btn-secondary">Cari</button>
                            </div>
                        </form>
                    </div> --}}

                    <!-- alert hanya admin -->
                    @if (session('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                    </div>
                    @endif

                    <!-- button tambah -->
                        <a class="btn btn-primary" href="{{ route('pendapatan.cetak_pdf') }}">Tambah User</a> <br>           
                
                {{-- <!-- form filter -->
                <div class="card">
                    <div class="card-body">    
                    <form action="{{ route('users.index') }}" method="GET">
                        <label for="role">Filter Peran:</label>
                        <select name="role" id="role">
                            <option value="">Semua</option>
                            <option value="operator" {{ $roleFilter === 'operator' ? 'selected' : '' }}>Operator</option>
                            <option value="warga" {{ $roleFilter === 'warga' ? 'selected' : '' }}>Warga</option>
                        </select>
                        <button type="submit" style="width:100px;" class="btn btn-secondary">Filter</button>
                    </form>
                    </div>
                </div> --}}

                <!-- form search and filter -->
                <div class="mb-3 d-flex justify-content-between">
                    <form action="{{ route('users.index') }}" method="GET" class="form-inline mr-2">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari pengguna" value="{{ $searchTerm }}">
                        </div>
                        <div class="form-group ml-2">
                            <button type="submit" class="btn btn-secondary">Cari</button>
                        </div>
                    </form>
                    <form action="{{ route('users.index') }}" method="GET" class="form-inline">
                        <div class="form-group">
                            <label for="role" class="mr-2">Filter Role:</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Semua</option>
                                <option value="operator" {{ $roleFilter === 'operator' ? 'selected' : '' }}>Operator</option>
                                <option value="warga" {{ $roleFilter === 'warga' ? 'selected' : '' }}>Warga</option>
                            </select>
                        </div>
                        <div class="form-group ml-2">
                            <button type="submit" style="width:100px;" class="btn btn-secondary">Filter</button>
                        </div>
                    </form>
                </div>

                <!-- Cetak PDF -->                
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('users.cetak_pdf') }}">CETAK DATA</a>
                    </div>
                </div>     
                    
                <!-- Data -->
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Role</th>
                                @if (auth()->user()->role === 'admin' || auth()->user()->role === 'operator')
                                    <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->nik }}</td>
                                    <td>{{ $user->nama_lengkap }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telepon }}</td>
                                    <td>{{ $user->role }}</td>
                                    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'operator')
                                        <td>
                                            <a style="width:100px;" class="btn btn-primary" href="{{ route('users.edit', $user) }}">Edit</a>                        
                                            @if ($user->role !== 'admin')
                                                <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="width:100px;" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> Hapus </button>
                                                </form>
                                            @endif
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
                <!-- Paginations -->
                <div class="pagination pagination-sm justify-content-center">
                    {{ $users->links() }}
                </div>
                </div>
                                       
                

            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- notifikasi 3 detik alert -->
<script>
  // Mencari elemen notifikasi
  const notification = document.querySelector('.alert');

  // Cek apakah notifikasi ada
  if (notification) {
    // Setelah 3 detik, sembunyikan notifikasi
    setTimeout(() => {
      notification.style.display = 'none';
    }, 3000);
  }
</script>


@endsection