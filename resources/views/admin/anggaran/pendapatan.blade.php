@extends('admin.layouts.navbar')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan Pendapatan Desa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pendapatan Desa</h6>
            <br>
            <a href="{{ route('admin.tambahpendapatan.anggaran') }}"><button type="button" class="btn" style="background-color: #609966; color:white;font-weight:bold;"><i class="fa-solid fa-plus"></i> Tambah Pendapatan Anggaran</button></a>
        </div>

        <!-- Filter -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route('pendapatan.filter') }}" method="GET">
                    <div class="form-group">
                        <label for="tahun">Filter berdasarkan tahun:</label>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">-- Pilih Tahun --</option>
                            @foreach ($tahunList as $tahun)
                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-filters"><i class="fa-solid fa-magnifying-glass"></i> Filter</button>
                </form>
            </div>
        </div>

        <!-- Cetak PDF -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('pendapatan.cetak_pdf') }}" method="GET">
                    <label for="tahun">Pilih Tahun:</label>
                    <select name="tahun" id="tahun">
                        @foreach ($tahunList as $tahun)
                        <option value="{{ $tahun }}">{{ $tahun }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-filters"><i class="fa-solid fa-download"></i> Cetak PDF per Tahun</button>
                    <a class="btn btn-filters" href="{{ route('pendapatan.cetaksemua') }}"><i class="fa-solid fa-download"></i> Cetak PDF Seluruh Tahun</a>
                </form>
            </div>
        </div>

        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>Sumber</th>
                            <th>Jumlah</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pendapatan as $data )
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{ $data->sumber }}</td>
                            <td>Rp {{ number_format($data->jumlah, 0, ',', '.') }}</td>
                            <td>{{ $data->tahun}}</td>
                            <td style="display: flex;">
                                <button type="button" style="width:100px; margin-right: 10px; background-color: orange; color: white; font-weight:bold;" class="btn" data-toggle="modal" data-target="#editModal{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                <form action="{{ route('pendapatan.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="width:100px;color: white;font-weight:bold;" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $data->id }}Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit Pendapatan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form Edit -->
                                        <form action="{{ route('pendapatan.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <!-- Form inputs for editing -->
                                            <div class="form-group">
                                                <label for="sumber">Sumber Pendapatan</label>
                                                <select class="form-control" id="sumber" name="sumber" required>
                                                    <option value="{{ $data->sumber }}">{{ $data->sumber }}</option>
                                                    <option value="DANA DESA">DANA DESA</option>
                                                    <option value="ALOKASI DANA NAGORI">ALOKASI DANA NAGORI</option>
                                                    <option value="DANA BAGI HASIL PAJAK/BUKAN PAJAK">DANA BAGI HASIL PAJAK/BUKAN PAJAK</option>
                                                    <option value="BAGI HASIL PAJAK/RETRIBUSI DAERAH">BAGI HASIL PAJAK/RETRIBUSI DAERAH</option>
                                                    <option value="PENDAPATAN LAINNYA">PENDAPATAN LAINNYA</option>
                                                </select>
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
                    {{ $pendapatan->links() }}
                </div>

            </div>
        </div>

        <!-- View Pendapatan -->
        <div class="card">
            <div class="card-header">Jumlah Pendapatan per Tahun</div>
            <div class="card-body">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vpendapatan as $item)
                        <tr>
                            <td>{{ $item->tahun }}</td>
                            <td>Rp {{ number_format(floatval($item->total_pendapatan), 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Website Desa Nagori NagoriTongah 2023</span>
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

@endsection