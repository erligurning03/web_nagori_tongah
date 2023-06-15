@extends('layouts.navbar_warga')
@section('css')
<style>
    .body {
        font-family: 'Lato'
    }

    ;

    .rounded-container {
        border-radius: 15px;
    }

    .card-text{
        display: -webkit-box;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-text .post{
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }
</style>
@endsection
@section('container')
<!-- <h1> Ini Halaman Dashboard Ya!!! </h1>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Forum Diskusi</a>
    <a href="{{ route('pengajuan') }}" class="btn btn-primary">Pengajuan</a>
    <a href="{{ route('history') }}" class="btn btn-primary">History Pengajuan Berkas</a>
    <a href="{{ route('transparasi') }}" class="btn btn-primary">Transparasi Dana</a> -->
<!-- </form> -->

<div class="container rounded-container">
    <div class="row">
        <div class="col-lg-8">
            <div class="bg-light p-4 rounded-container">
                <div class="row">
                @if ($latestBerita)
                    <div class="col-md-6">
                        <div class="card mb-4" style="height:280px"> 
                            <div class="card-body">
                                <h5 class="card-title">Berita Terbaru</h5>
                                @if ($latestBerita)
                                <img src="{{ asset('/storage/img_berita/'.$latestBerita->cover) }}" alt="Gambar" style="height: 130px; object-fit: contain;">
                                @endif
                                <p class="card-text">{{ $latestBerita->judul }}</p>
                                <a href="{{ route('berita.berita1') }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($latestPost)
                    <div class="col-md-6">
                        <div class="card mb-4" style="height:280px">
                            <div class="card-body">
                                <h5 class="card-title">Post Terbaru</h5>
                                @if ($latestPhoto)
                                <img src="{{ asset('gambar/'.$latestPhoto->foto) }}" alt="Gambar" style="height: 130px; object-fit: contain;">
                                @endif
                                <p class="card-text post">{{ $latestPost->judul }}</p>
                                <a href="{{ route('posts.index') }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Pengajuan Surat</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <br>
                                        <h5 class="card-title">Ajukan Surat</h5>
                                        <a href="{{ route('pengajuan') }}" class="btn btn-primary">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">Lihat Surat Anda Sebelumnya (History Surat)</h5>
                                        <a href="{{ route('history') }}" class="btn btn-primary">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="bg-light p-4 rounded-container">
                <h2>Notifikasi</h2>
                <p>Ini adalah konten notifikasi.</p>
            </div>
        </div>
    </div>
</div>

@endsection