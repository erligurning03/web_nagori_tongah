@extends('admin.layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Pengeluaran Desa</h1>
    
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                
                    <div class="container">
                        <div class="row justify-content-center">

                                    <div class="card-body">
                                        <form action="{{ route('pengeluaran.store') }}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label for="bidang">Bidang Pengeluaran</label>
                                                <select class="form-control" id="bidang" name="bidang" required>
                                                    <option value="">PILIH BIDANG</option>
                                                    <option value="BIDANG PENYELENGGARAAN PEMERINTAH NAGORI">BIDANG PENYELENGGARAAN PEMERINTAH NAGORI</option>
                                                    <option value="BIDANG PELAKSANAAN PEMBANGUNAN NAGORI">BIDANG PELAKSANAAN PEMBANGUNAN NAGORI</option>
                                                    <option value="BIDANG PEMBINAAN NAGORI">BIDANG PEMBINAAN NAGORI</option>
                                                    <option value="BIDANG PEMBERDAYAAN MASYARAKAT">BIDANG PEMBERDAYAAN MASYARAKAT</option>
                                                    <option value="BIDANG PENANGGULANGAN BENCANA, DARURAT, DAN MENDESAK">BIDANG PENANGGULANGAN BENCANA, DARURAT, DAN MENDESAK</option>
                                                    <option value="PEMBIAYAAN">PEMBIAYAAN</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="jumlah">Jumlah Pengeluaran</label>
                                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="tahun">Tahun</label>
                                                <input type="number" class="form-control" id="tahun" name="tahun" required>
                                            </div>

                                            <button type="submit" style="font-weight: bold;" class="btn btn-primary float-right" >Tambah</button>
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

@endsection