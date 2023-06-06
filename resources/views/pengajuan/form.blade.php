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
    <div style="background-color: #ffff; border-radius: 10px; padding: 10px; display: inline-block; font-family: 'Lato'">
        <h1>Form Upload Berkas</h1>
    </div>
    <div style="max-width: 1000px; margin: 0 auto;">
        <div style="background-color: #50915671; padding: 20px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <form action="{{ !empty($suket->id) ? route('submitform', $suket->id) : '#' }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div style="text-align: left; margin: 0; line-height: 1; margin-bottom: 1cm;">
                  <p style="color: rgb(255, 41, 41); font-size: 20px; font-weight: bold;">Persyaratan: {{ $suket->syarat }}</p>
                </div> 
                <input type="hidden" name="id_suket" value="{{ $suket->id }}">               
                <table style="width: 100%;">
                    <tr>
                        <td style="text-align: left;">
                            <label for="file">Upload File Anda disini <a style=" font-weight: bold;">(harus dalam bentuk .pdf atau file gambar)</a>:</label>
                        </td>
                        <td>
                            <input type="file" class="form-control-file" id="file" name="file[]" multiple>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">
                            <label for="file">File yang dipilih:</label>
                        </td>
                        <td>
                            <ul id="selected-files"></ul>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">
                            <label for="alasan">Deskripsi Alasan Mengurus:</label>
                        </td>
                        <td>
                            <textarea class="form-control" id="alasan" name="alasan" rows="5"></textarea>
                        </td>
                    </tr>
                </table>
                <br>
                <div style="text-align: right;">
                  <a class="btn btn-secondary" href="{{ route('dashboard') }}" style="margin-right: 10px;">Kembali</a>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
    </div>
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