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
            <br>
            <a href="{{ route('admin.tambahsuket.pengajuan') }}"><button type="button" class="btn" style="background-color: #609966; color:white;font-weight:bold;"><i class="fa-solid fa-plus"></i> Tambah Surat Keterangan</button></a>
        </div>

        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>Surat Keterangan</th>
                            <th>Syarat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($suket as $data )
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{ $data->suket }}</td>
                            <td>{{ $data->syarat }}</td>
                            <td style="display: flex; justify-content: flex-end;">
                                <!-- <button type="button" style="width:100px; margin-right: 10px; background-color: #609966; color: white; font-weight:bold;" class="btn" data-toggle="modal" data-target=""><i class="fa-solid fa-circle-info"></i>  Detail</button> -->
                                <button type="button" style="width:100px; margin-right: 10px; background-color: orange; color: white; font-weight:bold;" class="btn" data-toggle="modal" data-target="#editModal{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                <form action="{{ route('suket.destroy', $data->id) }}" method="POST">
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