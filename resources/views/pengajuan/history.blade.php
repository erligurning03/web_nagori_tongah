@extends('layouts.navbar_warga')
@section('css')
<style>
    .body{font-family: 'Lato'};
</style>
@endsection
@section('container');
    <br><br>
    <div class="container">
        <h2>History Pengajuan</h2>
        <table class="table table-striped table-bordered">
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
                            <a href="{{ asset('storage/berkas/' . $persyaratan->berkas) }}" download>{{ $persyaratan->berkas }}</a>
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
@endsection