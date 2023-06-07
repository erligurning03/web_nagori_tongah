@extends('layouts.navbar_warga')
@section('css')

<style>
  .thumbnail {
    /* margin-top: 10px;
    height: 250px;
    width: 250px;
    cursor: pointer; */
    margin-top: 10px;
    width: 250px;
    height: 250px;
    object-fit: cover;
    cursor: pointer;
  }
  .body{
    font-family: 'Lato';
  }

  .card-img-top {
   //width: 262px; /* Atur lebar gambar menjadi 100% dari container */
  //height: 280PX; //Atur tinggi gambar sesuai kebutuhan 
  //object-fit: cover; /* Memaksa gambar sesuai dengan ukuran yang ditentukan dan menjaga aspek rasio */
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
@endsection

{{-- </div>
<div class="col-md-3 col-sm-6 d-flex justify-content-center">
  <img class="thumbnail mx-auto" src="img/foto 1.jfif" alt="Gambar 1" data-toggle="modal" data-target="#modal1"> --}}

@section('container')
  <div class="container">
    <h1 class="text-center mt-5">Galeri Desa</h1>
    <div class="row">
   <?php $no = 1;?>
      @foreach($galeri as $gal)
        {{-- <div class="col-md-3 col-sm-6 d-flex justify-content-center"> --}}
          <div class="col-md-3 col-sm-6 mb-3 d-flex justify-content-center">
          <img class="thumbnail mx-auto card-img-top" src="{{asset('foto_galeri/'.$gal->gambar)}}" alt="Gambar 1" data-toggle="modal" data-target="#modal<?php $no++?>">
        </div>
      @endforeach
    </div>
  </div>

    <?php $noo = 1;?>
  
   @foreach($galeri as $gal)
  <!-- Modal 1 -->
  <div class="modal fade" id="modal<?php $noo++?>" tabindex="-1" role="dialog" aria-labelledby="modal.<?php $noo++?>.Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal.<?php $no++?>.Label">Gambar <?php $no++?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="{{asset('foto_galeri/'.$gal->gambar)}}" alt="Gambar <?php $noo++?>" style="width: 100%;">
        </div>
      </div>
    </div>
  </div>
  @endforeach





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection

