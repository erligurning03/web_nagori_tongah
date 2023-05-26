<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Berkas</title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- load Dropzone.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <!-- load Dropzone.js CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css" />

</head>
<body style="background-color:#609966; font-family: 'Lato'">
    <br>
    <div class="container">
        <h2>History Pengajuan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Surat Keterangan</th>
                    <th>Berkas Persyaratan</th>
                    <th>Status</th>
                    <th>Pesan</th>
                    <th>Tanggal Unggah</th>                    
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuan as $ajuan)
                    <tr>
                        <td>{{ $ajuan->suket->suket }}</td>
                        <td>
                            @foreach ($ajuan->persyaratan as $persyaratan)
                                <a href="{{ asset($persyaratan->berkas) }}" download>{{ $persyaratan->berkas }}</a>
                                <br>
                            @endforeach
                        </td>
                        <td>{{ $ajuan->status_pengajuan }}</td>
                        <td>
                            @if ($ajuan->status_pengajuan === 'diterima')
                                Surat sudah diterima, silahkan datang ke kantor.
                            @elseif ($ajuan->status_pengajuan === 'ditolak')
                                @php
                                    $tolak = $tolak->where('id_pengajuan', $ajuan->id)->first();
                                @endphp
                                @if ($tolak)
                                    {{ $tolak->alasan }}
                                @endif
                            @endif
                            
                        </td>
                        <td>{{ $ajuan->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center;">
            <!-- Display the pagination links -->
            {{ $pengajuan->links() }}
        </div>
    </div>  

</body>
</html>