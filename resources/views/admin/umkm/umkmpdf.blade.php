<!DOCTYPE html>
<html lang="en">

<head>
    <title>UMKM PDF</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        @page {
            size: landscape;
        }

        html,
        body {
            width: 842px;
            height: 595px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>
    <body>

<div class="container-fluid">


    <!-- Page Heading -->
    @if(session("post_success"))
    <div class="alert alert-success mt-2" style="text-align: center;" role="alert">
        {{ session("post_success") }}
    </div>
    @endif
    <h1 class="h3 mb-2 text-gray-800">UMKM Nagori</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama Usaha</th>
                            {{-- <th>Gambar Produk </th> --}}
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($umkm as $data )
                        <tr>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->nama_usaha }}</td>
                            {{-- <td>{{ asset('img/umkm/gambar_produk/'.$data->gambar_produk) }}</td> --}}
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->status_validasi }}</td>
                            {{-- <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihatSelengkapnya{{ $data->id }}">Lihat Selengkapnya</button>
                                <br>
                                <form action="{{ route('umkm.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="width:100px;" type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</i></button>
                                </form>
                                <br>
                                <button style="width:100px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $data->id }}">Edit</i></button>
                                </td>
                                <!-- Modal Lihat Selengkapnya -->

                                <div class="modal fade" id="lihatSelengkapnya{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="lihatSelengkapnya{{ $data->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="lihatSelengkapnya{{ $data->id }}Label">Data Warga </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @foreach($umkm->where('id', $data->id) as $datajelas)
                                            <div class="modal-body">                                                
                                                <h2 class="small">NIK <span class="float-right">{{ $datajelas->nik }}</span></h2>
                                                <h2 class="small">Foto KTP <span class="float-right"></span></h2>
                                                <img src="{{ asset('img/umkm/ktp/'.$data->upload_ktp) }}" style="height: 200px; object-fit: contain; "  alt="KTP" class="img-thumbnail">
                                                <h2 class="small">Pas Foto <span class="float-right"></span></h2>
                                                <img src="{{ asset('img/umkm/pas_foto/'.$data->pas_foto) }}" style="height: 200px; object-fit: contain; "  alt="Pas_Foto" class="img-thumbnail">
                                                <h2 class="small">Nama Usaha <span class="float-right">{{ $datajelas->nama_usaha }}</span></h2>
                                                <h2 class="small">Alamat <span class="float-right">{{ $datajelas->alamat }}</span></h2>
                                                <h2 class="small">Nomor Telepon <span class="float-right">{{ $datajelas->telepon }}</span></h2>
                                                <h2 class="small">Gambar Produk <span class="float-right"></span></h2>
                                                <img src="{{ asset('img/umkm/gambar_produk/'.$data->gambar_produk) }}" style="height: 200px; object-fit: contain; "  alt="Gambar Produk" class="img-thumbnail">
                                                <h2 class="small">Deskripsi <span class="float-right">{{ $datajelas->deskripsi }}</span></h2>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('tolak-user',  $data->nik) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </form>
                                                <form action="{{ route('terima-user',  $data->nik) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Terima</button>
                                                </form>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $data->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit Data UMKM</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form Edit -->
                                                <form action="{{ route('umkm.update', $data->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <!-- Form inputs for editing -->
                                                    <div class="form-group">
                                                        <label for="nik">Nomor Induk Keluarga:</label>
                                                        <input type="text" name="nik" id="nik" class="form-control" value="{{ $data->nik }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="upload_ktp">Upload KTP:</label>
                                                        <input type="file" name="upload_ktp" id="upload_ktp" class="form-control" value="{{ $data->upload_ktp }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pas_foto">Pas Foto:</label>
                                                        <input type="file" name="pas_foto" id="pas_foto" class="form-control" value="{{ $data->pas_foto }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_usaha">Nama Usaha:</label>
                                                        <input type="text" name="nama_usaha" id="nama_usaha" class="form-control" value="{{ $data->nama_usaha }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat:</label>
                                                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $data->alamat }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telepon">Nomor Telepon:</label>
                                                        <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $data->telepon }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="gambar_produk">Gambar Produk:</label>
                                                        <input type="file" name="gambar_produk" id="gambar_produk" class="form-control" value="{{ $data->gambar_produk }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="deskripsi">Deskripsi</label>
                                                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $data->deskripsi }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td> --}}
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

</div>
<!-- End of Content Wrapper -->

</body>
</html>
