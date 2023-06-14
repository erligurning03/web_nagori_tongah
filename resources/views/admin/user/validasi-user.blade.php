@extends('admin.layouts.navbar')
@section('css')
<style>
    .body {
        font-family: 'Lato'
    }

    ;
</style>
<link rel="stylesheet" href="{{ asset('css/forum_diskusi.css') }}">
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
    <h1 class="h3 mb-2 text-gray-800">Akun warga yang belum diverifikasi</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Akun Warga</h6>
        </div>

        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                        @foreach($users as $user)
                        <tr>
                        <th scope="row">{{$no++}}</th>
                            <td>{{ $user->nik }}</td>
                            <td>{{ $user->nama_lengkap }}</td>
                            <td>
                                <button type="button" style="width:100px; margin-right: 10px; background-color: #609966; color: white; font-weight:bold;" class="btn" data-toggle="modal" data-target="#lihatSelengkapnya{{ $user->nik }}"><i class="fa-solid fa-circle-info"></i>  Detail</button>
                                <!-- Modal Lihat Selengkapnya -->

                                <div class="modal fade" id="lihatSelengkapnya{{ $user->nik }}" tabindex="-1" role="dialog" aria-labelledby="lihatSelengkapnya{{ $user->nik }}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="lihatSelengkapnya{{ $user->nik }}Label">Data Warga </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @foreach($users->where('nik', $user->nik) as $data)
                                            <div class="modal-body">
                                                <img src="{{ asset('img/foto_profile/'.$data->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; display: block; margin: 0 auto;"><br>
                                                <h2 class="small">Nama <span class="float-right">{{ $data->nama_lengkap }}</span></h2>
                                                <h2 class="small">NIK <span class="float-right">{{ $data->nik }}</span></h2>
                                                <h2 class="small">Username <span class="float-right">{{ $data->username }}</span></h2>
                                                <h2 class="small">Email <span class="float-right">{{ $data->email }}</span></h2>
                                                <h2 class="small">No Telepon <span class="float-right">{{ $data->telepon }}</span></h2>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('tolak-user',  $data->nik) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="width:100px;color: white;font-weight:bold;" class="btn btn-danger"><i class="fa-solid fa-xmark"></i>  Tolak</button>
                                                </form>
                                                <form action="{{ route('terima-user',  $data->nik) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" style="width:100px; margin-right: 10px; background-color: #609966; color: white; font-weight:bold;" class="btn"><i class="fa-solid fa-check"></i> Terima</button>
                                                </form>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- Pagination -->
                <div class="pagination pagination-sm justify-content-center">
                    {{ $users->links() }}
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

<!-- notifikasi 3 detik alert -->
<script>
  // Mencari elemen notifikasi
  const notification = document.querySelector('.alert');

  // Cek apakah notifikasi ada
  if (notification) {
    // Setelah 3 detik, sembunyikan notifikasi
    setTimeout(() => {
      notification.style.display = 'none';
    }, 3000);
  }
</script>



@endsection