<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/forum_diskusi.css') }}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <!-- Font-Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0;
}

.sidepanel  {
  width: 0;
  position: fixed;
  z-index: 1;
  height: 100vh;
  top: 0;
  left: 0;
  background-color: #F9F9F9;
  overflow-x: hidden;
  overflow-y: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidepanel a {
  padding: 8px;
  text-decoration: none;
  font-size: 18px; /* Mengubah ukuran font menjadi 18px */
  color: #000000;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  background-color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #F9F9F9;
  margin: 10px;
  border-radius: 10px; /* Membuat sudut melengkung */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
}

.openbtn:hover {
  background-color:#f1f1f1;
}

.icon {
  display: inline-block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #999999;
  text-align: center;
  line-height: 40px;
  margin-right: 8px;
}

.icon i {
  color: white;
}
</style>
</head>
<body>

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#"><span class="icon"><i class="fas fa-house"></i></span>Utama</a>
  <a href="#"><span class="icon"><i class="fas fa-pen-to-square"></i></span>Postingan Anda</a>
  <a href="#"><span class="icon"><i class="fas fa-book-bookmark"></i></span>Postingan Disimpan</a>
  <a href="#"><span class="icon"><i class="fas fa-heart"></i></span>Postingan Disukai</a>
  <a href="#"><span class="icon"><i class="fas fa-comment"></i></span>Postingan Dikomentari</a>
</div>


<button class="openbtn" onclick="openNav()">☰ Sidebar</button>  
<!-- Page Content -->
<div id="notification"></div>

  <!-- container tengah -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto">
        <!-- fitur tambahkan post -->
        <div class="box" style="width: 100%; height: 50px;">
            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span>Tambahkan postingan</span>
                <i class="fa-solid fa-plus"></i>
            </a>
        </div>
        <!-- fitur search -->
        <div class="box mt-3" style="width: 50%;">
            <input type="text" placeholder="Cari postingan..." id="searchInput" oninput="searchPosts()">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        @foreach($posts->sortByDesc('created_at') as $post)
        <div class="box2 mt-5" data-judul="{{ $post->judul }}" data-isi="{{ $post->isi_post }}" data-penulis="{{ $post->user->nama_lengkap }}" data-tanggal="{{ $post->created_at->toDateString() }}">
            <div class="post-header">
                <div class="profile-picture">
                  <img src="{{ asset('img/'.$post->user->foto_profil) }}" alt="Foto Profil" style="border-radius: 50%; object-fit: contain; width:45px; height: 45px; border: 1px solid black; ">
              </div>
                <div class="post-info">
                    <span style="font-weight: bold;">{{ $post->user->nama_lengkap }}</span>
                    <span style="font-weight: normal;">{{ $post->created_at->diffForHumans() }}</span>
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
                <i class="far fa-heart fa-xl love-icon action-icon" onclick="toggleLove(this, {{ $post->id }})"></i>
                <b id="like-count">{{ $post->jumlah_like }}</b>
                <i class="far fa-comment fa-xl action-icon" data-bs-toggle="modal" data-bs-target="#modalKomentar{{ $post->id }}"></i>
                <i class="far fa-bookmark fa-xl action-icon"></i>
                <i class="far fa-flag fa-xl action-icon"></i>
                </div>
                <p>{{ $post->created_at->isoFormat('dddd, D MMMM YYYY') }}</p>
            </div>
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
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="postForm" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
          </div>
          <div class="mb-3">
            <label for="isi_post" class="form-label">Isi Post</label>
            <textarea class="form-control" id="isi_post" name="isi_post" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <div id="imagePreview"></div>
            <div>
            <button type="button"  class="btn btn-primary" onclick="addPhotoInput()">Tambahkan Foto</button>
            <button type="button"  class="btn btn-danger" onclick="removeAllPhotos()">Hapus Semua Foto</button>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" id="submitBtn">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript untuk menangani submit form -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
      }, 3000);
    } else {
      // Tampilkan pesan gagal jika form tidak valid
      var notification = document.createElement('div');
      notification.className = 'alert alert-danger';
      notification.innerHTML = 'Gagal menambahkan post';
      document.getElementById('notification').appendChild(notification);
      
      // Hapus notifikasi setelah 3 detik
      setTimeout(function() {
        document.getElementById('notification').removeChild(notification);
      }, 3000);
    }
  });
</script>

<!-- Modal Komentar -->
@foreach($posts->sortByDesc('created_at') as $post)
<div class="modal fade" id="modalKomentar{{ $post->id }}" tabindex="-1" aria-labelledby="modalKomentarLabel{{ $post->id }}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKomentarLabel{{ $post->id }}">Komentar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Daftar Komentar -->
        <div class="daftar-komentar">
          <!-- Komentar -->
          @foreach($komentars->where('id_post', $post->id) as $komentar)
          <div class="komentar">
            <div class="komentar-header">
              <div class="komentar-info">
                <img src="img/foto_profil.jpg" alt="Foto Profil" class="profile-picture">
                <span style="font-weight: bold;">{{ $komentar->nama_lengkap }}</span>
                <span style="font-weight: normal;">{{ $komentar->created_at->diffForHumans() }}</span>
              </div>
            </div>
            <div class="komentar-content">
              <p>{{ $komentar->isi_komentar }}</p>
            </div>
          </div>
          @endforeach
        </div>
        
        <!-- Form Komentar -->
        <form id="formKomentar{{ $post->id }}" action="{{ route('posts.komentar-store') }}" method="POST">
          @csrf
          <input type="hidden" name="id_post" value="{{ $post->id }}">
          <div class="mb-3">
            <label for="komentar" style="font-weight: bold;" class="form-label">Tambahkan Komentar</label>
            <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach


<!-- script untuk preview image  -->
<script>
  function previewImages(event) {
    var imagePreview = document.getElementById('imagePreview');

    var files = event.target.files;
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var reader = new FileReader();

      reader.onload = function (e) {
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


<!-- Script untuk AJAX Komentar -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    // Tangkap event submit pada form komentar
    $('form[id^="formKomentar"]').submit(function (event) {
      event.preventDefault(); // Mencegah form melakukan submit biasa

      var form = $(this);
      var url = form.attr('action');
      var formData = form.serialize(); // Mengambil data form

      $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function (response) {
          // Komentar berhasil ditambahkan, lakukan penanganan response di sini
          var komentar = response.komentar;

          // Menambahkan komentar baru ke daftar komentar
          var daftarKomentar = form.siblings('.daftar-komentar');
          var komentarHTML = `
            <div class="komentar">
              <div class="komentar-header">
                <div class="komentar-info">
                  <img src="img/foto_profil.jpg" alt="Foto Profil" class="profile-picture">
                  <span style="font-weight: bold;">${komentar.nik}</span>
                  <span style="font-weight: normal;">${komentar.waktu}</span>
                </div>
              </div>
              <div class="komentar-content">
                <p>${komentar.isi_komentar}</p>
              </div>
            </div>
          `;
          daftarKomentar.append(komentarHTML);

          // Mengosongkan textarea komentar
          form.find('textarea[name="komentar"]').val('');
        },
        error: function (xhr, status, error) {
          // Penanganan jika terjadi error saat mengirim komentar
          console.error(error);
        }
      });
    });
  });
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

        var dayOptions = { weekday: 'long', timeZone: 'UTC' };
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}

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
   
</body>
</html> 
