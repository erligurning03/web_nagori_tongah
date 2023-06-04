@extends('admin.layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add UMKM</h1>
    
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                
                    <div class="container">
                        <div class="row justify-content-center">

                                    <div class="card-body">
                                        <form action="{{ route('umkm.store') }}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label for="nik">Nomor Induk Keluarga</label>
                                                <input type="text" class="form-control" id="nik" name="nik" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="upload_ktp">Upload KTP</label>
                                                <input type="file" class="form-control" id="upload_ktp" name="upload_ktp" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pas_foto">Pas Foto</label>
                                                <input type="file" class="form-control" id="pas_foto" name="pas_foto" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="nama_usaha">Nama Usaha</label>
                                                <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="alamat">alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telepon">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="telepon" name="telepon" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar_produk">Gambar Produk</label>
                                                <input type="file" class="form-control-file" id="gambar_produk" name="gambar_produk" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="deskripsi">deskripsi</label>
                                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary float-right" >Tambah</button>
                                        </form>
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