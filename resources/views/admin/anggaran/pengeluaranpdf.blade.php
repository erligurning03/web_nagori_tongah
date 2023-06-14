<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pengeluaran PDF</title>

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
        <h1 class="h3 mb-2 text-gray-800">Laporan Pengeluaran Desa </h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- Data -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bidang</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                                <th>Tahun</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through $pengeluaran data -->
                            @php $i=1 @endphp
                            @foreach ($pengeluaran as $data)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $data->bidang }}</td>
                                <td>{{ $data->keterangan }}</td>
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

        <!-- View pengeluaran -->
        <br>
        <br>
        <div class="card">
            <div class="card-header">Jumlah Pengeluaran pertahun</div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through $vpengeluaran data -->
                        @foreach ($vpengeluaran as $item)
                        <tr>
                            <td>{{ $item->tahun }}</td>
                            <td>Rp {{ number_format(floatval($item->total_pengeluaran), 0, ',', '.') }}</td>
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
