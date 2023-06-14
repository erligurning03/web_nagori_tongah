@extends('admin.layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Berita</h1>
    
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambahkan Berita</h6>
                        </div>
                
                    <div class="container">
                        <div class="row justify-content-center">

                                    <div class="card-body">
                                        <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" class="form-control" id="nik" name="nik" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="sumber">Jenis Berita</label>
                                                <select class="form-control" id="sumber" name="jenis_berita" required>
                                                    <option value="berita">Berita</option>
                                                    <option value="hoax">Hoax</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="judul">Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="isi_berita">Isi Berita</label>
                                                <input type="text" class="form-control" id="isi_berita" name="isi_berita" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="foto">Gambar:</label>
                                                <input type="file" name="image" id="foto" class="form-control">
                                                @error('image')
                                                    <div>{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <button type="submit" style="font-weight:bold;" class="btn btn-primary float-right" >Tambah</button>
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