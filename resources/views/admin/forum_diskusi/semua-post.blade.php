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
<div class="container-fluid">
    <div id="notification" style="text-align: center;"></div>
    @if(session("post_success"))
    <div class="alert alert-success mt-2" style="text-align: center;" role="alert">
        {{ session("post_success") }}
    </div>
    @endif

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Semua Post</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Post</h6>
        </div>

        <!-- Data -->
        <div class="col-12 col-md-6 mx-auto">
            @foreach($posts->sortByDesc('created_at') as $post)
            <div class="box2 mt-5" id="post-{{ $post->id }}" data-judul="{{ $post->judul }}" data-isi="{{ $post->isi_post }}" data-penulis="{{ $post->user->nama_lengkap }}" data-tanggal="{{ $post->created_at->toDateString() }}">
                <div class="post-header">
                    <div class="profile-picture">
                        <img src="{{ asset('img/foto_profile/'.$post->user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
                    </div>
                    <div class="post-info">
                        <span style="font-weight: bold;">{{ $post->user->nama_lengkap }}</span>
                        <span style="font-weight: normal;">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="delete-button" style="margin-left: auto;">
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePostModal-{{ $post->id }}">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </div>
                    <!-- Modal Konfirmasi Hapus -->
                    <div class="modal fade" id="deletePostModal-{{ $post->id }}" tabindex="-1" aria-labelledby="deletePostModalLabel-{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deletePostModalLabel-{{ $post->id }}">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda ingin menghapus postingan ini?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ route('post.delete.admin', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-content">
                    <h4>{{ $post->judul }}</h4>
                    <p>{{ $post->isi_post }}</p>
                    @php
                    $fotoPosts = \App\Models\FotoPost::where('id_post', $post->id)->get();
                    @endphp

                    @if($fotoPosts && $fotoPosts->count() > 0)
                    <div class="post-image-container">
                        <div class="post-image-wrapper">
                            @foreach($fotoPosts as $index => $fotoPost)
                            <img src="{{ asset('gambar/'.$fotoPost->foto) }}" alt="Foto Post" class="card-image @if($index === 0) active @endif">
                            @endforeach
                        </div>
                        @if($fotoPosts->count() > 1)
                        <div class="next-arrow" onclick="nextImage(this)">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        @endif
                    </div>
                    @endif
                </div>

                <div class="post-actions" style="justify-content: space-between;">
                    <div>
                        <i class="far fa-comment fa-xl action-icon" data-bs-toggle="modal" data-bs-target="#modalKomentar{{ $post->id }}" data-post-id="{{ $post->id }}"></i>
                        <b id="like-count">{{ $post->jumlah_komentar }}</b>
                    </div>
                    <p>{{ $post->created_at->isoFormat('dddd, D MMMM YYYY') }}</p>
                </div>
                @if(session("comment_success_{$post->id}"))
                <div class="alert alert-success mt-2" role="alert">
                    {{ session("comment_success_{$post->id}") }}
                </div>
                @endif
                @if(session('comment_error_{$post->id}'))
                <div class="alert alert-danger" role="alert">
                    {{ session('comment_error_{$post->id}') }}
                </div>
                @endif
            </div>
            @endforeach
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

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>

<!-- script untuk bisa ke foto selanjutnya dan kembali ke foto sebelumnya -->
<script>
    function nextImage(element) {
        var imageWrapper = element.previousElementSibling;
        var images = imageWrapper.querySelectorAll('img');
        var activeIndex = Array.from(images).findIndex(img => img.classList.contains('active'));
        var nextIndex = (activeIndex + 1) % images.length;

        images[activeIndex].classList.remove('active');
        images[nextIndex].classList.add('active');
    }
</script>

<!-- scroll komentar -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hash = window.location.hash;
        if (hash) {
            const targetElement = document.querySelector(hash);
            if (targetElement) {
                targetElement.scrollIntoView();
            }
        }
    });
</script>

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


<!-- Modal Komentar -->
<!-- Modal -->
@foreach($posts as $post)
<div class="modal fade" id="modalKomentar{{ $post->id }}" tabindex="-1" aria-labelledby="modalKomentarLabel{{ $post->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKomentarLabel{{ $post->id }}">Komentar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="max-height: 50vh; overflow-y: auto;">
                @if ($post->komentarPosts && count($post->komentarPosts) > 0)
                <div class="comments-section">
                    @foreach($post->komentarPosts->where('id_post', $post->id)->sortByDesc('created_at') as $comment)
                    <div class="mb-3">
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('img/foto_profile/'.$comment->user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black;">
                            <div class="ms-2">
                                <b><span>{{ $comment->user->nama_lengkap }}</span></b>
                                <span class="ms-2 text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                                <p style="margin-top: 5px;">{{ $comment->isi_komentar }}</p>
                            </div>
                            <div class="ms-auto mt-2">
                                <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p>No comments available.</p>
                @endif
            </div>
        </div>
    </div>
</div>

@foreach($post->komentarPosts as $comment)
<div class="modal fade" id="deleteModal{{ $comment->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $comment->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $comment->id }}">Konfirmasi Hapus Komentar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus komentar ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form action="{{ route('delete.comment.admin', ['id' => $comment->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach



@endsection