
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
                    </div>
                    @if(session('success'))
							<div class="alert alert-success">
								{{ session('success') }}
							</div>
					@endif
                    <!-- Data -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Jenis Berita</th>
                                        <th>Judul</th>
                                        <th>Isi Berita</th>
                                        <th>Gambar Berita</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($berita as $data )
                                    <tr>
                                        <td>{{ $data->nik }}</td>
                                        <td>{{ $data->jenis_berita}}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->isi_berita }}</td>
                                        <td><img style="width: 300px" src="{{asset('/storage/'.$data->alamatGambar)}}" alt="Gambar00"></td>
                                        <td>
                                        <form action="{{ route('berita.destroy', $data->id) }}" method="POST">
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
                                                            <label for="alamatGambar">Gambar: </label>
                                                            <br>
                                                            <img style="width: 300px" src="{{asset('/storage/'.$data->alamatGambar)}}" alt="Gambar00">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" name="namaGambar" id="namaGambar" class="form-control" value="{{ $data->namaGambar }}">
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

                <button onclick="window.location.href='{{ route('admin.tambahberita.berita') }}'" class="btn btn-primary">Tambahkan Berita</button>

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