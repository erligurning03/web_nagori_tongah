@extends('admin.layouts.navbar')
@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Add Surat Keterangan Desa</h1>
    
                <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                
                    <div class="container">
                        <div class="row justify-content-center">

                                    <div class="card-body">
                                        <form action="{{ route('suket.store') }}" method="POST">
                                            @csrf

                                            <div class="form-group">
                                                <label for="suket">Nama Surat Keterangan</label>
                                                <input type="text" class="form-control" id="suket" name="suket" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="syarat">Persyaratan</label>
                                                <input type="text" class="form-control" id="syarat" name="syarat" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary float-right" style="font-weight: bold;" >Tambah</button>
                                        </form>
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