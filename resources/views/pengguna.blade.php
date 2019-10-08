<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Pengguna</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h3>CRUD Data PKL</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No telpon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tanggal dibuat</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengguna as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->no_telepon }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->created_at }}</td>
                            <td>
                                <a href="/pengguna/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>