@extends('layouts.navbar_warga')
@section('css')
<style>
    .body{font-family: 'Lato'};
</style>
@endsection
@section('container');
    <h1 class="text-center mt-5">Daftar Surat Pemohon</h1>

    <!-- fitur search -->
    {{-- <div class="d-flex justify-content-center mt-4">
        <div style="max-width: 100%;">
            <div class="input-group">
            <input type="text" class="form-control form-control-lg" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
            </div>
            </div>
        </div>
    </div> --}}

    <!-- card -->
    <div class="container mt-4">
        <div class="row">
            @foreach ($suket as $data)
            <div class="col-md-4 mb-4">
            <div class="card" style="background-color: #609966;">
                <div class="card-body">
                <h5 class="card-title">{{ $data->suket }}</h5>
                <a href="{{ route('form', $data->id) }}" class="btn btn-light">Buat Ajuan</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection