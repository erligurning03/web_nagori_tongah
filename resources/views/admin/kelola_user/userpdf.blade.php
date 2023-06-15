<!DOCTYPE html>
<html lang="en">

<head>
    <title>User PDF</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        @page {
            size: landscape;
        }

        html,
        body {
            width: 842px;
            height: 595px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>
    <body>
            <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Data Users</h1>
                <!-- Data -->
                <div class="card-body">
                    <h3 class="h3 mb-2 text-gray-800">List Admin</h3>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $admin->nik }}</td>
                                    <td>{{ $admin->nama_lengkap }}</td>
                                    <td>{{ $admin->username }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->telepon }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>

                <div class="card-body">
                    <h3 class="h3 mb-2 text-gray-800">List Operator</h3>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($operators as $operator)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $operator->nik }}</td>
                                    <td>{{ $operator->nama_lengkap }}</td>
                                    <td>{{ $operator->username }}</td>
                                    <td>{{ $operator->email }}</td>
                                    <td>{{ $operator->telepon }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>

                <div class="card-body">
                    <h3 class="h3 mb-2 text-gray-800">List Warga</h3>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($wargas as $warga)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $warga->nik }}</td>
                                    <td>{{ $warga->nama_lengkap }}</td>
                                    <td>{{ $warga->username }}</td>
                                    <td>{{ $warga->email }}</td>
                                    <td>{{ $warga->telepon }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                </div>
                </div>
                </div>
                                       
                

            </div>

        </div>
            <!-- /.container-fluid -->

    </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </body>

</html>
