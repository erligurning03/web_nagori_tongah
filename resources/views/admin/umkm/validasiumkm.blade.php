@extends('admin.layouts.navbar')
@section('css')
<style>
    .body {
        font-family: 'Lato'
    }

    .button-group {
        display: flex;
    }

    .button-group button {
        margin-right: 10px;
    }

    ;
</style>
@endsection
@section('container')

<!-- Begin Page Content -->
<div id="notification" style="text-align: center;"></div>

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
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar UMKM</h6>
        </div>
        </div>


        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>NIK</th>
                            <th>Nama Usaha</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($umkm as $data )
                        @if ($data->status_validasi == 'menunggu')
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->nama_usaha }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->status_validasi }}</td>
                            <td style="display: flex;">
                                <button type="button" style="width:100px; margin-right: 10px; background-color: #609966; color: white; font-weight:bold;" class="btn" data-toggle="modal" data-target="#lihatSelengkapnya{{ $data->id }}"><i class="fa-solid fa-circle-info"></i> Detail</button>                        
                               
                                <!-- Modal Lihat Selengkapnya -->
                                <div class="modal fade" id="lihatSelengkapnya{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="lihatSelengkapnya{{ $data->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="lihatSelengkapnya{{ $data->id }}Label">Data UMKM </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @foreach($umkm->where('id', $data->id) as $datajelas)
                                            <div class="modal-body">
                                                <h2 class="small">NIK <span class="float-right">{{ $datajelas->nik }}</span></h2>
                                                <h2 class="small">Foto KTP <span class="float-right"></span></h2>
                                                <img src="{{ asset('img/umkm/ktp/'.$data->upload_ktp) }}" style="height: 200px; object-fit: contain; " alt="KTP" class="img-thumbnail">
                                                <h2 class="small">Pas Foto <span class="float-right"></span></h2>
                                                <img src="{{ asset('img/umkm/pas_foto/'.$data->pas_foto) }}" style="height: 200px; object-fit: contain; " alt="Pas_Foto" class="img-thumbnail">
                                                <h2 class="small">Nama Usaha <span class="float-right">{{ $datajelas->nama_usaha }}</span></h2>
                                                <h2 class="small">Alamat <span class="float-right">{{ $datajelas->alamat }}</span></h2>
                                                <h2 class="small">Nomor Telepon <span class="float-right">{{ $datajelas->telepon }}</span></h2>
                                                <h2 class="small">Gambar Produk <span class="float-right"></span></h2>
                                                <img src="{{ asset('img/umkm/gambar_produk/'.$data->gambar_produk) }}" style="height: 200px; object-fit: contain; " alt="Gambar Produk" class="img-thumbnail">
                                                <h2 class="small">Deskripsi <span class="float-right">{{ $datajelas->deskripsi }}</span></h2>
                                                @if ($datajelas->status_validasi === 'menunggu') <br>
                                                <!-- Tombol Terima -->
                                                <form action="{{ route('umkm.terima', $datajelas->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" style="width:100px; margin-right: 10px; background-color: #609966; color: white; font-weight:bold;" class="btn" onclick="return confirm('Apakah Anda yakin ingin mengkonfirmasi pengajuan umkm ini?')"><i class="fa-solid fa-check"></i> Terima</button>
                                                </form>

                                                <!-- Tombol Tolak -->
                                                <form action="{{ route('umkm.tolak', $datajelas->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" style="width:100px;color: white;font-weight:bold;" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menolak pengajuan umkm ini?')"><i class="fa-solid fa-check"></i> Tolak</button>
                                                </form>
                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>


                <!-- Pagination -->
                <div class="pagination pagination-sm justify-content-center">
                    {{-- {{ $data->links() }} --}}
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