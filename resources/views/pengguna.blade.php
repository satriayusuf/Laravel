<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Pengguna</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>CRUD Data PKL</h3>
                    </div>
                    <div class="card-body">
                        <form action="/pengguna" method="GET" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari Pegawai .."
                                value="{{ old('cari') }}">
                            <input type="submit" value="CARI" class="btn btn-outline-success my-2 my-sm-0">
                        </form>
                        <br>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>No telepon</th>
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
                                        <a href="/pengguna/edit/{{ $p->id }}" class="btn btn-warning">Ubah</a>
                                        <a href="/pengguna/hapus/{{ $p->id }}"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/pengguna/tambah" class="btn btn-primary">Tambah Pengguna Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>