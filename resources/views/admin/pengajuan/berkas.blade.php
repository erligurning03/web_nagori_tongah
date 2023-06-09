@extends('admin.layouts.navbar')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan Surat Keterangan Desa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Surat Keterangan Desa</h6>
        </div>

        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Surat Ajuan</th>
                            <th>Berkas Persyaratan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($pengajuan as $item)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{ $item->user->nik }}</td>
                            <td>{{ $item->user->nama_lengkap }}</td>
                            <td>{{ $item->suket->suket }}</td>
                            <td>
                                @foreach ($item->persyaratan as $persyaratan)
                                <a href="{{ asset('storage/berkas/' . $persyaratan->berkas) }}" download>{{ $persyaratan->berkas }}</a>
                                <br>
                                @endforeach
                            </td>
                            <td>{{ $item->status_pengajuan }}</td>
                            <td style="display: flex; justify-content: flex-end;">
                                @if ($item->status_pengajuan === 'menunggu')
                                <!-- Tombol Konfirmasi -->
                                <form action="{{ route('pengajuan.konfirmasi', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" style="width:100px; margin-right: 10px; background-color: #609966; color: white; font-weight:bold;" class="btn" onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi pengajuan ini?')"><i class="fa-solid fa-check"></i> Terima</button>
                                </form>
                                <!-- Tombol Penolakan -->
                                <button type="button" style="width:100px;color: white;font-weight:bold;" class="btn btn-danger" data-toggle="modal" data-target="#tolakModal{{ $item->id }}" onclick="return confirm('Apakah Anda yakin ingin menolak pengajuan ini?')"><i class="fa-solid fa-xmark"></i>  Tolak</button>

                                <!-- Modal Penolakan -->
                                <div class="modal fade" id="tolakModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="tolakModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="{{ route('pengajuan.penolakan', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="tolakModalLabel{{ $item->id }}">Alasan Penolakan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="alasan">Alasan Penolakan</label>
                                                        <textarea class="form-control" id="alasan" name="alasan" rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- Pagination -->
                {{-- <div class="pagination pagination-sm justify-content-center">
                                {{ $suket->links() }}
            </div> --}}

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