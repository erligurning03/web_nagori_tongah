
@extends('admin.layouts.navbar')
@section('container')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Laporan UMKM Desa</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data UMKM Desa</h6>
                    </div>

                    <!-- Data -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nomor Induk Keluarga</th>
                                        <th>Foto KTP</th>
                                        <th>Pas Foto</th>
                                        <th>Nama Usaha</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>Gambar Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($umkm as $data )
                                    <tr>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->upload_ktp }}</td>
                                        <td>{{ $data->pas_foto }}</td>
                                        <td>{{ $data->nama_usaha }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>{{ $data->gambar_produk }}</td>
                                        <td>{{ $data->deskripsi}}</td>
                                        <td>
                                        <form action="{{ route('umkm.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="width:100px;" type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</i></button>
                                        </form>
                                        <br>
                                        <button style="width:100px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $data->id }}">Edit</i></button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $data->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit Data UMKM</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit -->
                                                    <form action="{{ route('umkm.update', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <!-- Form inputs for editing -->
                                                        <div class="form-group">
                                                            <label for="nik">Nomor Induk Keluarga:</label>
                                                            <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ktp">Upload KTP:</label>
                                                            <input type="file" name="upload_ktp" id="upload_ktp" class="form-control" value="{{ $data->upload_ktp }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pas_foto">Pas Foto:</label>
                                                            <input type="file" name="pas_foto" id="pas_foto" class="form-control" value="{{ $data->pas_foto }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_usaha">Nama Usaha:</label>
                                                            <input type="text" name="nama_usaha" id="nama_usaha" class="form-control" value="{{ $data->nama_usaha }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat:</label>
                                                            <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $data->alamat }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="telepon">Nomor Telepon:</label>
                                                            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $data->telepon }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar_produk">Gambar Produk:</label>
                                                            <input type="file" name="gambar_produk" id="gambar_produk" class="form-control" value="{{ $data->gambar_produk }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="deskripsi">Deskripsi</label>
                                                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $data->deskripsi }}">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            
                            
                            <!-- Pagination -->
                            <div class="pagination pagination-sm justify-content-center">
                                {{ $umkm->links() }}
                            </div>
                            
                        </div>
                    </div>

                <button onclick="window.location.href='{{ route('admin.tambahumkm.umkm') }}'" class="btn btn-primary">Tambah UMKM</button>

            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

@endsection