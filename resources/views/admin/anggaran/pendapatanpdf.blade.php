<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendapatan PDF</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        /* @page {
        size: 21cm 29.7cm;
        margin: 12mm 15mm 10mm 12mm;
        } */

        html,
        body {
            height: 842px;
            width: 595px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Laporan Pendapatan Desa</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Data -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Sumber</th>
                                <th>Jumlah</th>
                                <th>Tahun</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through $pendapatan data -->
                            @php $i=1 @endphp
                            @foreach ($pendapatan as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->sumber }}</td>
                                <td>Rp {{ number_format(floatval($data->jumlah), 0, ',', '.') }}</td>
                                <td>{{ $data->tahun }}</td>
                                <td>{{ $data->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- View Pendapatan -->
        <br>
        <br>
        <div class="card">
            <div class="card-header">Jumlah Pendapatan pertahun</div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through $vpendapatan data -->
                        @foreach ($vpendapatan as $item)
                        <tr>
                            <td>{{ $item->tahun }}</td>
                            <td>Rp {{ number_format(floatval($item->total_pendapatan), 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- End of Main Content -->
</body>

</html>
