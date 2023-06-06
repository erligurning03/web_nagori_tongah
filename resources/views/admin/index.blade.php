@extends('admin.layouts.navbar')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>


    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengajuan Surat</h6>
                </div>
                <div class="card-body">
                <a href="{{ route('berkas.ajuan') }}"><button type="button" class="btn btn-success mb-2">LihatSelengkapnya</button></a>
                @foreach($pengajuan as $item)
                    <h4 class="small font-weight-bold">Nama <span class="float-right">{{ $item->user->nama_lengkap }}</span></h4>
                    <h4 class="small font-weight-bold">NIK <span class="float-right">{{ $item->user->nik }}</span></h4>
                    <h4 class="small font-weight-bold">Surat Pengajuan <span class="float-right">{{ $item->suket->suket }}</span></h4>
                    <h4 class="small font-weight-bold" style="color:red">Status <span class="float-right">{{ $item->status_pengajuan }}</span></h4>
                    <br>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Warga</h6>
                </div>
                <div class="card-body">
                
                <a href="{{ route('validasi-user') }}"><button type="button" class="btn btn-success mb-2">LihatSelengkapnya</button></a>
                @foreach($users as $data)
                    <h4 class="small font-weight-bold">Nama <span class="float-right">{{ $data->nama_lengkap }}</span></h4>
                    <h4 class="small font-weight-bold">NIK <span class="float-right">{{ $data->nik }}</span></h4>
                    <h4 class="small font-weight-bold" style="color:red">Status Akun<span class="float-right">{{ $data->status_akun }}</span></h4>
                    <br>
                @endforeach
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