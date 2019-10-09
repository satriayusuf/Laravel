<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <p>Cari Data Pegawai :</p>
        <form action="/pengguna/cari" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari Pegawai .."
                value="{{ old('cari') }}">
            <input type="submit" value="CARI" class="btn btn-outline-success my-2 my-sm-0">
        </form>
        <br>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengguna as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->no_telepon }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="">Ubah</a>
                        <a href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
