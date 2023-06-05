
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
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Surat Keterangan</th>
                                        <th>Syarat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suket as $data )
                                    <tr>
                                        <td>{{ $data->suket }}</td>
                                        <td>{{ $data->syarat }}</td>
                                        <td>
                                        <form action="{{ route('suket.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="width:100px;" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                        <br>
                                        <button type="button"  style="width:100px;" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $data->id }}">Edit</button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $data->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit Surat Keterangan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit -->
                                                    <form action="{{ route('suket.update', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <!-- Form inputs for editing -->
                                                        <div class="form-group">
                                                            <label for="suket">Nama Surat Keterangan:</label>
                                                            <input type="text" name="suket" id="suket" class="form-control" value="{{ $data->suket }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="syarat">Persyaratan:</label>
                                                            <input type="text" name="syarat" id="syarat" class="form-control" value="{{ $data->syarat }}">
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
                                {{ $suket->links() }}
                            </div>
                            
                        </div>
                    </div>

                <button onclick="window.location.href='{{ route('admin.tambahsuket.pengajuan') }}'" class="btn btn-primary">Tambah Surat Keterangan</button>

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