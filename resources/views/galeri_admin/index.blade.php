@extends('admin.layouts.navbar')
@section('css')
<link href="{{ asset('css/belanja.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="container">
        <h1 style="text-align: center">GALERI FOTO</h1>
        <div class="card">
            <div class="card-body">
                <div class="d-grid gap-2 d-md-block">
                     <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">tambah</button>
                </div>
                <!-- start Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">INPUT GALLERY</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="galeri_admi" method="POST" enctype="multipart/form-data">
                              {{-- pergi ke web.php untuk carik route ini yang bertipe post--}}
                              @csrf
                                <div class="mb-3">
                                  <label for="id" class="form-label" >id</label>
                                  <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="id">
                                </div>
                                {{-- <div class="mb-3">
                                  <label for="tes" class="form-label" >tes</label>
                                  <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="tes">
                                </div> --}}
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">input gambar</label>
                                  <input type="file" class="form-control" id="gambar" name="gambar">
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

                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">gambar kegiatan</th>
                        {{-- <th scope="col">tes</th> --}}
                        <th scope="col">aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php $no = 1;?>
                      {{-- diatas untuk bikin nomor --}}
                        @foreach($galeri as $gal)
                            <tr>
                            <th scope="row">{{$no++}}</th> 
                            {{-- <td>{{$gal->id}}</td> --}}
                            {{-- <td>{{$gal->tes}}</td> --}}
                            {{-- <td>{{$gal->gambar}}</td>  ini dah jalan --}}
                            <td>
                              <img src="{{asset('foto_galeri/'.$gal->gambar)}}" alt="" style="width: 350px;">
                              {{-- panggil gambar dengan cara ini udah benar --}}
                            </td>
                            <td>
                                {{-- <button type="button" class="btn btn-primary">update</button> --}}
                                <form action="/galeri_admin/{{$gal->id}}" method="post">
                                  @csrf
                                  @method("delete")
                                  <button class="btn btn-danger" type="submit">delete</button>
                                </form>
                                
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
            </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
@endsection
