@extends('admin.layouts.navbar')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah User Desa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td><label for="nik">NIK:</label></td>
                                <td><input type="text" name="nik" id="nik" required></td>
                            </tr>
                            <tr>
                                <td><label for="nama_lengkap">Nama Lengkap:</label></td>
                                <td><input type="text" name="nama_lengkap" id="nama_lengkap" required></td>
                            </tr>
                            <tr>
                                <td><label for="username">Username:</label></td>
                                <td><input type="text" name="username" id="username" required></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password:</label></td>
                                <td><input type="password" name="password" id="password" required></td>
                            </tr>
                            <tr>
                                <td><label for="email">Email:</label></td>
                                <td><input type="email" name="email" id="email" required></td>
                            </tr>
                            <tr>
                                <td><label for="telepon">Telepon:</label></td>
                                <td><input type="text" name="telepon" id="telepon" required></td>
                            </tr>
                            <tr>
                                <td><label for="role">Role:</label></td>
                                <td>
                                    <select name="role" id="role">
                                        <option value="operator">Operator</option>
                                        <option value="warga">Warga</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <div style="text-align: right;">
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()" style="margin-right: 10px;">Kembali</button>
                        <button type="submit" class="btn btn-primary float-right">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
        @endif
    
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
