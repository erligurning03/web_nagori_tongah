@extends('admin.layouts.navbar')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Berita</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Semua Berita</h6>
            <br>
            <a href="{{ route('admin.tambahberita.berita') }}"><button type="button" class="btn" style="background-color: #609966; color:white;font-weight:bold;"><i class="fa-solid fa-plus"></i> Tambah Berita</button></a>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>NIK</th>
                            <th>Jenis Berita</th>
                            <th>Judul</th>
                            <th>Isi Berita</th>
                            <th>Gambar Berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($berita as $data )
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->jenis_berita}}</td>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->isi_berita }}</td>
                            <td><img style="width: 300px" src="{{asset('img_berita/'.$data->cover)}}" alt="Gambar00"></td>
                            <td style="display: flex;">
                                <button type="button" style="width:100px; margin-right: 10px; background-color: orange; color: white; font-weight:bold;" class="btn" data-toggle="modal" data-target="#editModal{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                                <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
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
                                        <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit Berita</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form Edit -->
                                        <form action="{{ route('berita.update', $data->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="PUT">
                                            <!-- Form inputs for editing -->
                                            <div class="form-group">
                                                <label for="nik">NIK:</label>
                                                <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="sumber">Jenis Berita</label>
                                                <select class="form-control" id="sumber" name="jenis_berita" required>
                                                    <option value="{{ $data->jenis_berita="berita" }}">Berita</option>
                                                    <option value="{{ $data->jenis_berita="hoax" }}">Hoax</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="judul">Judul:</label>
                                                <input type="text" name="judul" id="judul" class="form-control" value="{{ $data->judul }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="isi_berita">Isi Berita:</label>
                                                <input type="text" name="isi_berita" id="isi_berita" class="form-control" value="{{ $data->isi_berita }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="cover">Gambar: </label>
                                                <br>
                                                <img style="width: 250px" src="{{asset('img_berita/'.$data->cover)}}" alt="Gambar00">
                                            </div>
                                            <div class="form-group">
                                                <input type="file" name="cover" id="cover" class="form-control" value="{{ $data->cover}}">
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
                    {{ $berita->links() }}
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

{{-- <!-- Logout Modal-->
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
    </div> --}}

@endsection