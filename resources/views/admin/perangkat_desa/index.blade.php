@extends('admin.layouts.navbar')
@section('container')

                  <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Daftar Perangkat Desa</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Perangkat Desa</h6>
                    </div>

                    <!-- Filter -->

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pendapatan.filter') }}" method="GET"> 
                            <div class="form-group">
                                <label for="tahun">Filter berdasarkan periode:</label>
                                <select name="tahun" id="tahun" class="form-control">
                                    <option value="">-- Pilih Tahun --</option>
                                    @foreach ($periode as $data)
                                        <option value="{{ $data->id }}">{{ $data->periode_mulai }}/{{$data->periode_akhir}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-grid gap-2 d-md-block mt-2" data-bs-toggle="modal">
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </form>
                        {{-- <div class="d-grid gap-2 d-md-block mt-2">
                            <!-- Button trigger modal -->
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">tambah</button>
                       </div> --}}
                            {{-- start untuk tambah perangkat_desa --}}
                        <!-- start Modal -->
                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">TAMBAHKAN PERANGKAT DESA</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="galeri_admi" method="POST" enctype="multipart/form-data">//perbaiki route ini
                                        {{-- pergi ke web.php untuk carik route ini yang bertipe post--}}
                                        {{-- @csrf
                                        <div class="mb-3">
                                            <label for="nama" class="form-label" >Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jabatan" class="form-label" >Jabatan</label>
                                            <input type="text" class="form-control" id="jabatan" aria-describedby="emailHelp" name="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="periode" class="form-label" >Periode</label>
                                            <input type="text" class="form-control" id="periode" aria-describedby="emailHelp" name="periode">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">input foto perangkat desa</label>
                                            <input type="file" class="form-control" id="foto" name="foto">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                {{-- </div>
                            </div>
                            </div>
                        </div>  --}} 
                        {{-- end of modal --}}
                    {{-- end of tambah perangkat_desa --}}

                    </div>
                </div>
                    <!-- start Modal tambah -->
                    <div id="ModalTambah" class="modal fade"  tabindex="-1" aria-labelledby="ModalTambah" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="ModalTambah">INPUT PERANGKAT DESA</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/tambah_perangkat_desa" method="POST" enctype="multipart/form-data">
                                {{-- pergi ke web.php untuk carik route ini yang bertipe post. actionnya ini adalah yang diketikkan route getnya termasuk tanda slashnya '/'--}}
                                @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label" >Nama</label>
                                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jabatan" class="form-label" >Jabatan</label>
                                        <input type="text" class="form-control" id="jabatan" aria-describedby="emailHelp" name="jabatan">
                                    </div>
                                    <div class="mb-3">
                                        {{-- <label for="periode" class="form-label" >Periode</label>
                                        <input type="text" class="form-control" id="periode" aria-describedby="emailHelp" name="periode"> --}}
                                        <label for="periode" class="form-label" >Periode</label>
                                        <select name="id_periode" id="id_periode">
                                            <option disabled value>pilih periode</option>
                                            @foreach($periode as $value)
                                            <option value="{{$value->id}}">{{$value->periode_mulai}}/{{$value->periode_akhir}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">input gambar</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- end of modal --}}
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
               
                    <!-- Data tabel-->
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-block">
                            <!-- Button trigger modal -->
                           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambah">tambah</button>
                       </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">NO.</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Periode</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach ($perangkat_desa as  $result => $data )
                                    <tr>
                                        <th scope="row">{{$no++}}</th> 
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>{{ $data->periode->periode_mulai}}/{{ $data->periode->periode_akhir}}</td>
                                        {{-- <td>{{ $data->foto}}</td> --}}
                                        <td>
                                            <img src="{{asset('foto_perangkat/'.$data->foto)}}" alt="" style="width: 350px;">
                                            {{-- panggil gambar dengan cara ini udah benar --}}
                                          </td>
                                        <td>
                                        <form action="/perangkat_desa/{{$data->id}}" method="POST">
                                        {{-- <form action="{{ route('.destroy', $data->id) }}" method="POST"> --}}
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="width:100px;" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                        <br>
                                        <button type="button"  style="width:100px;" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $data->id }}">Edit</button>
                                        </td>
                                    </tr>



                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $data->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModal{{ $data->id }}Label">Edit Pendapatan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form Edit -->
                                                    <form action="{{ route('pendapatan.update', $data->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <!-- Form inputs for editing -->
                                                        <div class="form-group">
                                                            <label for="sumber">Sumber Pendapatan</label>
                                                            <select class="form-control" id="sumber" name="sumber" required>
                                                                <option value="{{ $data->sumber }}">{{ $data->sumber }}</option>
                                                                <option value="DANA DESA">DANA DESA</option>
                                                                <option value="ALOKASI DANA NAGORI">ALOKASI DANA NAGORI</option>
                                                                <option value="DANA BAGI HASIL PAJAK/BUKAN PAJAK">DANA BAGI HASIL PAJAK/BUKAN PAJAK</option>
                                                                <option value="BAGI HASIL PAJAK/RETRIBUSI DAERAH">BAGI HASIL PAJAK/RETRIBUSI DAERAH</option>
                                                                <option value="PENDAPATAN LAINNYA">PENDAPATAN LAINNYA</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jumlah">Jumlah:</label>
                                                            <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ $data->jumlah }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tahun">Tahun:</label>
                                                            <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $data->tahun }}">
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
                                {{ $perangkat_desa->links() }}
                            </div>
                            
                        </div>
                    </div>
                                <!-- Tautan navigasi paginasi -->
                                {{-- {{ $perangkat_desa->links() }} --}}
                            {{-- <!-- Pagination -->
                            <div class="pagination pagination-sm justify-content-center">
                                {{ $pendapatan->links() }}
                            </div>
                            
                        </div>
                    </div>
                
                    <!-- View Pendapatan -->
                <div class="card">
                    <div class="card-header">Jumlah Pendapatan pertahun</div>
                    <div class="card-body">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vpendapatan as $item)
                                <tr>
                                    <td>{{ $item->tahun }}</td>
                                    <td>Rp {{ $item->total_pendapatan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <button onclick="window.location.href='{{ route('admin.tambahpendapatan.anggaran') }}'" class="btn btn-primary">Tambah Pendapatan</button>

            </div>

        </div>
            <!-- /.container-fluid -->

    </div> --}}
            <!-- End of Main Content -->

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

