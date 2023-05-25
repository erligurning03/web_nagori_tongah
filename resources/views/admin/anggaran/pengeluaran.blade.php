@extends('admin.layouts.navbar')
@section('container')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Laporan Pengeluaran Desa</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengeluaran Desa</h6>
                    </div>

                    <!-- Filter -->

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pengeluaran.filter') }}" method="GET">
                            <div class="form-group">
                                <label for="tahun">Filter berdasarkan tahun:</label>
                                <select name="tahun" id="tahun" class="form-control">
                                    <option value="">-- Pilih Tahun --</option>
                                    @foreach ($tahunList as $tahun)
                                        <option value="{{ $tahun }}">{{ $tahun }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>

                    <!-- Data -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Bidang</th>
                                        <th>Keterangan</th>
                                        <th>Jumlah</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengeluaran as $data )
                                    <tr>
                                        <td>{{ $data->bidang }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>Rp {{ $data->jumlah }}</td>
                                        <td>{{ $data->tahun}}</td>
                                        <td>
                                        <form action="{{ route('pengeluaran.destroy', $data->id) }}" method="POST">
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
                                                    <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit pengeluaran</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit -->
                                                    <form action="{{ route('pengeluaran.update', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <!-- Form inputs for editing -->
                                                        <div class="form-group">
                                                            <label for="bidang">Bidang Pengeluaran</label>
                                                            <select class="form-control" id="bidang" name="bidang" required>
                                                                <option value="{{ $data->bidang }}">{{ $data->bidang }}</option>
                                                                <option value="BIDANG PENYELENGGARAAN PEMERINTAH NAGORI">BIDANG PENYELENGGARAAN PEMERINTAH NAGORI</option>
                                                                <option value="BIDANG PELAKSANAAN PEMBANGUNAN NAGORI">BIDANG PELAKSANAAN PEMBANGUNAN NAGORI</option>
                                                                <option value="BIDANG PEMBINAAN NAGORI">BIDANG PEMBINAAN NAGORI</option>
                                                                <option value="BIDANG PEMBERDAYAAN MASYARAKAT">BIDANG PEMBERDAYAAN MASYARAKAT</option>
                                                                <option value="BIDANG PENANGGULANGAN BENCANA, DARURAT, DAN MENDESAK">BIDANG PENANGGULANGAN BENCANA, DARURAT, DAN MENDESAK</option>
                                                                <option value="PEMBIAYAAN">PEMBIAYAAN</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keterangan">Keterangan:</label>
                                                            <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $data->keterangan }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jumlah">Jumlah:</label>
                                                            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $data->jumlah }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tahun">Tahun:</label>
                                                            <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $data->tahun }}">
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
                                {{ $pengeluaran->links() }}
                            </div>
                            
                        </div>
                    </div>
                
                    <!-- View pengeluaran -->
                <div class="card">
                    <div class="card-header">Jumlah pengeluaran pertahun</div>
                    <div class="card-body">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vpengeluaran as $item)
                                <tr>
                                    <td>{{ $item->tahun }}</td>
                                    <td>Rp {{ $item->total_pengeluaran }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <button onclick="window.location.href='{{ route('admin.tambahpengeluaran.anggaran') }}'" class="btn btn-primary">Tambah pengeluaran</button>

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