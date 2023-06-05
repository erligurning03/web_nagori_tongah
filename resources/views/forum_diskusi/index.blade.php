@extends('layouts.navbar_warga')
@section('css')
<style>
    .body{font-family: 'Lato'};
</style>
<link rel="stylesheet" href="{{ asset('css/forum_diskusi.css') }}">
@endsection

@section('container')
<div id="mySidepanel" class="sidepanel" style="margin-top:100px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="{{ route('posts.index') }}"><span class="icon"><i class="fas fa-house"></i></span>Utama</a>
  <a href="{{ route('post-anda') }}"><span class="icon"><i class="fas fa-pen-to-square"></i></span>Postingan Anda</a>
  <a href="#"><span class="icon"><i class="fas fa-book-bookmark"></i></span>Postingan Disimpan</a>
  <a href="{{ route('post-suka') }}"><span class="icon"><i class="fas fa-heart"></i></span>Postingan Disukai</a>
  <a href="{{ route('post-komentar') }}"><span class="icon"><i class="fas fa-comment"></i></span>Postingan Dikomentari</a>
</div>



<!-- Page Content -->
<div id="notification" style="text-align: center;"></div>
@if(session("post_success"))
<div class="alert alert-success mt-2" style="text-align: center;" role="alert">
  {{ session("post_success") }}
</div>
@endif

<!-- container tengah -->
<div class="container">
<h1 class="text-center">Forum Diskusi</h1>
  <div class="row">
    <div class="col-12 col-md-6 mx-auto">
      <!-- fitur tambahkan post -->
      <div class="box" style="width: 100%; height: 50px;">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <span>Apa yang Anda pikirkan?</span>
          <i class="fa-solid fa-plus"></i>
        </a>
      </div>
      <!-- fitur search -->
      <div class="box mt-3" style="width: 100%;justify-content: space-between;">
        <input type="text" placeholder="Cari postingan..." id="searchInput" oninput="searchPosts()">
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>
      <div class="box mt-3" style="width: 100%; height: 50px;" onclick="openNav()">
        <a href="#">
          <span>Cari Berdasarkan:</span>
        </a>
      </div>
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
          @if(Auth::user()->nik == $post->user->nik)
          <div class="delete-button" style="margin-left: auto;">
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePostModal-{{ $post->id }}">
              <i class="far fa-trash-alt"></i>
            </button>
          </div>
          @endif
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
                  <form action="{{ route('post.delete', $post->id) }}" method="POST">
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
            <!-- Tombol Like -->
            <a href="{{ route('toggle.like', $post->id) }}" data-post-id="{{ $post->id }}">
              @if ($post->isLikedByUser())
              <i class="fas fa-heart fa-xl love-icon action-icon text-danger"></i>
              @else
              <i class="far fa-heart fa-xl love-icon action-icon"></i>
              @endif
            </a>
            <b id="like-count">{{ $post->jumlah_like }}</b>
            <i class="far fa-comment fa-xl action-icon" data-bs-toggle="modal" data-bs-target="#modalKomentar{{ $post->id }}" data-post-id="{{ $post->id }}"></i>
            <b id="like-count">{{ $post->jumlah_komentar }}</b>
            @if(Auth::user()->nik != $post->user->nik)
            <i class="far fa-flag fa-xl action-icon" data-bs-toggle="modal" data-bs-target="#modalLaporan{{ $post->id }}" data-post-id="{{ $post->id }}"></i>
            @endif
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
</div>

<!-- Modal Tambahkan Postingan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-l">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="checkFormChanges()"></button>
      </div>
      <div class="modal-body">
        <form id="postForm" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <p style="color:red;  font-size: 12px;">Postingan tidak boleh mengandung unsur sara dan pornografi</p>
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Postingan" required>
          </div>
          <div class="mb-3">
            <label for="isi_post" class="form-label">Isi Post</label>
            <textarea class="form-control" id="isi_post" name="isi_post" rows="3" placeholder="Apa yang Anda pikirkan?" required></textarea>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <div id="imagePreview"></div>
            <div>
              <button type="button" class="btn btn-primary" onclick="addPhotoInput()">Tambahkan Foto</button>
              <button type="button" class="btn btn-danger" onclick="removeAllPhotos()">Hapus Semua Foto</button>
            </div>
          </div>
          <hr class="modal-divider">
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  var formChanged = false;

  // Fungsi untuk memeriksa perubahan pada form
  function checkFormChanges() {
    var judul = document.getElementById('judul').value.trim();
    var isiPost = document.getElementById('isi_post').value.trim();

    // Cek apakah ada inputan yang diisi
    if (judul !== '' || isiPost !== '') {
      formChanged = true;

      // Tampilkan konfirmasi jika ada perubahan pada form
      if (confirm('Postingan Anda belum disimpan, apakah Anda yakin ingin menutupnya?')) {
        // Tutup modal jika dikonfirmasi
        var modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
        modal.hide();
        resetForm();
      } else {
        // Jangan tutup modal jika dibatalkan
        formChanged = false;
      }
    } else {
      resetForm();
    }
  }

  // Fungsi untuk mengosongkan form
  function resetForm() {
    document.getElementById('postForm').reset();
    formChanged = false;
  }

  // Event listener untuk mengecek perubahan form sebelum menutup modal
  document.getElementById('exampleModal').addEventListener('hidden.bs.modal', function() {
    if (formChanged) {
      resetForm();
    }
  });
</script>

<!-- JavaScript untuk menangani submit form -->
<script>
  document.getElementById('submitBtn').addEventListener('click', function() {
    // Simpan referensi modal
    var modal = document.getElementById('exampleModal');

    // Simpan referensi form
    var form = document.getElementById('postForm');

    // Cek apakah form valid sebelum mengirimkan data
    if (form.checkValidity()) {
      // Tutup modal
      var modalBS = bootstrap.Modal.getInstance(modal);
      modalBS.hide();

      // Lakukan refresh halaman
      location.reload();

      // Tampilkan notifikasi
      var notification = document.createElement('div');
      notification.className = 'alert alert-success';
      notification.innerHTML = 'Post berhasil ditambahkan';
      document.getElementById('notification').appendChild(notification);

      // Hapus notifikasi setelah 3 detik
      setTimeout(function() {
        document.getElementById('notification').removeChild(notification);
      }, 5000);
    } else {
      // Tampilkan pesan gagal jika form tidak valid
      var notification = document.createElement('div');
      notification.className = 'alert alert-danger';
      notification.innerHTML = 'Gagal menambahkan post';
      document.getElementById('notification').appendChild(notification);

      // Hapus notifikasi setelah 3 detik
      setTimeout(function() {
        document.getElementById('notification').removeChild(notification);
      }, 5000);
    }
  });
</script>

<!-- Modal Komentar -->
<!-- Modal -->
@foreach($posts as $post)
<div class="modal fade" id="modalKomentar{{ $post->id }}" tabindex="-1" aria-labelledby="modalKomentarLabel{{ $post->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKomentarLabel{{ $post->id }}">Add Comment</h5>
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
              @if ($comment->user->nik == Auth::user()->nik)
              <div class="ms-auto mt-2">
                <button type="button" class="btn btn-danger btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $comment->id }}">
                  <i class="far fa-trash-alt"></i>
                </button>
              </div>
              @endif
            </div>
          </div>
          @endforeach
        </div>
        @else
        <p>No comments available.</p>
        @endif
      </div>
      <div class="modal-footer">
        <form action="{{ route('add.comment') }}#post-{{ $post->id }}" method="POST" class="w-100">
          @csrf
          <input type="hidden" name="id_post" value="{{ $post->id }}">
          <div class="input-group mb-3">
            <textarea class="form-control" id="isi_komentar" name="isi_komentar" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@foreach($post->komentarPosts as $comment)
@if ($comment->user->nik == Auth::user()->nik)
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
        <form action="{{ route('delete.comment', ['id' => $comment->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endif
@endforeach
@endforeach

<!-- Modal Laporan -->
<!-- Modal -->
@foreach($posts as $post)
<div class="modal fade" id="modalLaporan{{ $post->id }}" tabindex="-1" aria-labelledby="modalLaporanLabel{{ $post->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLaporanLabel{{ $post->id }}">Laporkan Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('add.laporan', $post->id) }}" method="POST">
          @csrf
          <div class="mb-3">
            <input type="hidden" name="id_post" value="{{ $post->id }}">
            <label for="isi_laporan" class="form-label">Alasan mengapa Post tersebut dilaporkan</label>
            <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Laporkan</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endforeach

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





<!-- script untuk preview image  -->
<script>
  function previewImages(event) {
    var imagePreview = document.getElementById('imagePreview');

    var files = event.target.files;
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var reader = new FileReader();

      reader.onload = function(e) {
        var imageContainer = document.createElement('div');
        imageContainer.classList.add('image-container');

        var image = document.createElement('img');
        image.src = e.target.result;
        image.classList.add('preview-image');
        imageContainer.appendChild(image);

        imagePreview.appendChild(imageContainer);
      };

      reader.readAsDataURL(file);
    }
  }

  function addPhotoInput() {
    var input = document.createElement('input');
    input.type = 'file';
    input.classList.add('form-control');
    input.name = 'gambar[]';
    input.onchange = previewImages;

    var imagePreview = document.getElementById('imagePreview');
    imagePreview.appendChild(input);
  }

  function resetFileInput() {
    var imagePreview = document.getElementById('imagePreview');
    var imageContainers = imagePreview.getElementsByClassName('image-container');

    // Hapus file input dan preview foto terkait dengan foto kedua
    var inputContainer = imageContainers[1];
    inputContainer.remove();

    // Dapatkan kembali file input pertama
    var firstInput = document.createElement('input');
    firstInput.type = 'file';
    firstInput.classList.add('form-control');
    firstInput.name = 'gambar[]';
    firstInput.onchange = previewImages;

    // Tambahkan kembali file input pertama dan preview fotonya
    imagePreview.insertBefore(firstInput, imageContainers[0]);
  }

  // Tambahkan fungsi hapus semua foto
  function removeAllPhotos() {
    var imagePreview = document.getElementById('imagePreview');
    imagePreview.innerHTML = '';

    // Tambahkan kembali file input
    addPhotoInput();
  }
</script>


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

<!-- script untuk mencari postingan -->
<script>
  function searchPosts() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var boxes = document.querySelectorAll('.box2');

    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth() + 1;
    var currentDay = currentDate.getDate();

    boxes.forEach(function(box) {
      var judul = box.getAttribute('data-judul').toLowerCase();
      var isi = box.getAttribute('data-isi').toLowerCase();
      var penulis = box.getAttribute('data-penulis').toLowerCase();
      var tanggal = box.getAttribute('data-tanggal');

      var postDate = new Date(tanggal);
      var postYear = postDate.getFullYear();
      var postMonth = postDate.getMonth() + 1;
      var postDay = postDate.getDate();

      var dayOptions = {
        weekday: 'long',
        timeZone: 'UTC'
      };
      var locale = 'id-ID';
      var dayName = postDate.toLocaleDateString(locale, dayOptions).toLowerCase();

      var searchKeywords = input.split(' ');

      var matchKeyword = false;
      searchKeywords.forEach(function(keyword) {
        if (
          judul.includes(keyword) ||
          isi.includes(keyword) ||
          penulis.includes(keyword) ||
          postDay.toString().includes(keyword) ||
          (getMonthName(postMonth).includes(keyword) && getFullDate(postDate).includes(keyword)) ||
          postYear.toString().includes(keyword) ||
          (currentDay === postDay && 'hari ini'.includes(keyword)) ||
          (currentDay - postDay === 1 && 'kemarin'.includes(keyword)) ||
          (dayName.includes(keyword)) ||
          (currentMonth.toString().includes(keyword) && currentYear.toString().includes(keyword))
        ) {
          matchKeyword = true;
        }
      });

      if (matchKeyword) {
        box.style.display = 'block';
      } else {
        box.style.display = 'none';
      }
    });
  }

  function getMonthName(month) {
    var monthNames = [
      "januari", "februari", "maret", "april", "mei", "juni",
      "juli", "agustus", "september", "oktober", "november", "desember"
    ];

    return monthNames[month - 1];
  }

  function getFullDate(date) {
    var day = date.getDate();
    var month = getMonthName(date.getMonth() + 1);
    var year = date.getFullYear();
    return day + ' ' + month + ' ' + year;
  }
</script>


<script>
  function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
  }
</script>

<!-- script untuk like -->
<script>
  function toggleLove(icon) {
    // Periksa apakah ikon saat ini memiliki kelas "far" atau "fas"
    if (icon.classList.contains('far')) {
      // Ubah kelas menjadi "fas" dan tambahkan kelas "text-danger" untuk memberikan warna merah
      icon.classList.remove('far');
      icon.classList.add('fas', 'text-danger');
    } else {
      // Ubah kelas menjadi "far" dan hapus kelas "text-danger" untuk menghilangkan warna merah
      icon.classList.remove('fas', 'text-danger');
      icon.classList.add('far');
    }
  }
</script>
@endsection