@extends('admin.layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Pendapatan Desa</h1>
    
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                
                    <div class="container">
                        <div class="row justify-content-center">

                                    <div class="card-body">
                                        <form action="{{ route('pendapatan.store') }}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label for="sumber">Sumber Pendapatan</label>
                                                <select class="form-control" id="sumber" name="sumber" required>
                                                    <option value="">PILIH SUMBER</option>
                                                    <option value="DANA DESA">DANA DESA</option>
                                                    <option value="ALOKASI DANA NAGORI">ALOKASI DANA NAGORI</option>
                                                    <option value="DANA BAGI HASIL PAJAK/BUKAN PAJAK">DANA BAGI HASIL PAJAK/BUKAN PAJAK</option>
                                                    <option value="BAGI HASIL PAJAK/RETRIBUSI DAERAH">BAGI HASIL PAJAK/RETRIBUSI DAERAH</option>
                                                    <option value="PENDAPATAN LAINNYA">PENDAPATAN LAINNYA</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="jumlah">Jumlah Pendapatan</label>
                                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="tahun">Tahun</label>
                                                <input type="number" class="form-control" id="tahun" name="tahun" required>
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