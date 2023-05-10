<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Berkas</title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- load Dropzone.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <!-- load Dropzone.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" />

</head>
<body style="background-color:#609966; font-family: 'Lato'">
    <div style="padding: 10px; text-align: center;">
        <!-- judul -->
        <h1 style="background-color: #fff; border-radius: 20px; padding: 10px; display: inline-block; font-family: 'Lato'">
        Form Upload Berkas
        </h1>
        <!-- container -->
        <div style="max-width: 500px; margin: 0 auto; background-color: #fff; padding: 20px;">
            <div style="text-align: left; margin: 0; line-height: 0.5; margin-bottom: 1cm;">
                <p>Persyaratan:</p>
                <p>1. Kartu Keluarga</p>
                <p>2. Kartu Tanda Penduduk</p>
            </div>
            <p>Silahkan Unggah File Persyaratan Yang Diminta</p>
            <div class="container">
                <div style="background-color:#D9D9D9;" class="dropzone" id="myDropzone"></div>
                <button style="background-color:#3CCF4E; margin-top: 10px;" type="button" id="addFilesBtn">Add Files</button>
            </div>
        </div>    
</body>

<script>
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
  </script>
</html>