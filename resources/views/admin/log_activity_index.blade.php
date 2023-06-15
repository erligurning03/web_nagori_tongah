@extends('admin.layouts.navbar')
@section('container')

                  <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Daftar Aktivitas Pengguna website Nagori-Nagori Tongah</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Aktivitas Pengguna</h6>
                        {{-- <h5>{{$title}}({{$models->total()}})</h5> --}}
                    </div>

               
                    <!-- Data tabel-->
                    <div class="card-body">
                        {{-- <div class="d-grid gap-2 d-md-block">
                            <!-- Button trigger modal -->
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambah">tambah</button>
                       </div> --}}

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th>Nama Pengguna</th>
                                        <th>Event</th>
                                        <th>Before</th>
                                        <th>After</th>
                                        <th>Deskripsi</th>
                                        <th>Log At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($models as  $data )
                                    <tr>
                                        {{-- <th scope="row">{{$no++}}</th>  --}}
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $data->causer->nama_lengkap }}</td>
                                        <td>{{ $data->event }}</td>
                                        {{-- <td>@dump(@$data->changes->toArray()['old'])</td> --}}
                                        <td>
                                            @if(@is_array($data->changes['old']))
                                            @foreach ($data->changes['old'] as $key=> $itemChanges)
                                                {{-- {{dd($itemChanges)}} --}}
                                                {{$key}}:{{$itemChanges}} <br>
                                                {{-- {{$itemChanges}} --}}
                                            @endforeach 
                                            @endif
                                           
                                        </td>
                                        <td>
                                            @if(@is_array($data->changes['attributes']))
                                            @foreach ($data->changes['attributes'] as $key=> $itemChanges)
                                                {{-- {{dd($itemChanges)}} --}}
                                                {{$key}}:{{$itemChanges}} <br>
                                            @endforeach 
                                            @endif
                                           
                                        </td>
                                        <td>{{ $data->description}}</td>
                                        <td>{{$data->created_at->format('d-m-Y H:i:s')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            <div class="pagination pagination-sm justify-content-center">
                                {{ $models->links() }}
                            </div>
                            
                        </div>
                    </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Website Desa Nagori NagoriTongah 2023</span>
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

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

