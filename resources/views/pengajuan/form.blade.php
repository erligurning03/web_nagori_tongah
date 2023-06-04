@extends('layouts.navbar_warga')
@section('css')
<style>
    .body{font-family: 'Lato';
    background-color: #609966;
    }
</style>
@endsection
@section('container')
    <div style="padding: 10px; text-align: center;">
        <!-- judul -->
        <h1 style="background-color: #fff; border-radius: 20px; padding: 10px; display: inline-block; font-family: 'Lato'">
        Form Upload Berkas
        </h1>
        <!-- container -->
        <div style="max-width: 1000px; margin: 0 auto; background-color: #fff; padding: 20px;">
          <form action="{{ !empty($suket->id) ? route('submitform', $suket->id) : '#' }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="text-align: left; margin: 0; line-height: 1; margin-bottom: 1cm;">
              <p style="color: rgb(255, 41, 41)">Persyaratan: {{ $suket->syarat }}</p>
            </div>
            @if (!empty($suket->id))
            <input type="hidden" name="id_suket" value="{{ $suket->id }}">
            @endif
            <div class="form-group">
              <label for="file">Upload File Anda disini (harus dalam bentuk .pdf):</label>
              <input type="file" class="form-control-file" id="file" name="file[]" multiple>
            </div>
            <!-- Tampilkan daftar file yang dipilih -->
            <div class="form-group">
              <label for="file">File yang dipilih:</label>
              <ul id="selected-files"></ul>
            </div>
            <div class="form-group">
              <label for="alasan">Deskripsi Alasan Mengurus</label>
              <input type="text" class="form-control" id="alasan" name="alasan" multiple>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            <br>
          @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
           @endif
      
          @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
                
        </div>
<script>
  // Tampilkan nama file yang dipilih saat memilih file
  document.getElementById('file').addEventListener('change', function(e) {
      var files = e.target.files;
      var selectedFilesList = document.getElementById('selected-files');
      selectedFilesList.innerHTML = '';

      for (var i = 0; i < files.length; i++) {
          var listItem = document.createElement('li');
          listItem.textContent = files[i].name;
          selectedFilesList.appendChild(listItem);
      }
  });
</script>
@endsection
{{-- <script>
    // initialize Dropzone
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#myDropzone", {
      url: "/upload.php", // file upload URL
      paramName: "file", // name of the file parameter
      maxFilesize: 2, // max file size in MB
      maxFiles: 5, // max number of files
      dictDefaultMessage: "Drop your files here or click to add files", // message to display
    });

    // add event listener to button
    document.getElementById("addFilesBtn").addEventListener("click", function() {
      myDropzone.hiddenFileInput.click(); // click the hidden file input
    });
  </script> --}}