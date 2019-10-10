<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Pengguna</title>

    <style>
        p {
            float: right;
        }

        .message-success {
            float: right;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Data Pengguna</h3>
                    </div>
                    <div class="card-body">
                        <form action="/pengguna/cari" method="GET" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari Pengguna ...."
                                value="{{ old('cari') }}">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                        <p>
                            <?php if(Session::has('hapus')): ?>
                            <div class="message message-success">
                                <span class="close"></span>
                                <?php echo Session::get('hapus') ?>
                            </div>
                            <?php endif; ?>

                            <?php if(Session::has('simpan')): ?>
                            <div class="message message-success">
                                <span class="close"></span>
                                <?php echo Session::get('simpan') ?>
                            </div>
                            <?php endif; ?>

                            <?php if(Session::has('ubah')): ?>
                            <div class="message message-success">
                                <span class="close"></span>
                                <?php echo Session::get('ubah') ?>
                            </div>
                            <?php endif; ?>

                            <?php if(Session::has('not_found')): ?>
                            <div class="message message-success">
                                <span class="close"></span>
                                <?php echo Session::get('not_found') ?>
                            </div>
                            <?php endif; ?>

                        </p>
                        <br>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th> Tanggal dibuat
                                        <button class="btn">
                                            <i class="fa fa-sort" aria-hidden="true"></i>
                                            <?php
                                                
                                            ?>
                                        </button>
                                    </th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengguna as $key => $p)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->no_telepon }}</td>
                                    <td>{{ $p->email }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->created_at }}</td>
                                    <td class="text-center">
                                        <a href="/pengguna/edit/{{ $p->id }}" class="btn btn-warning">Ubah</a>
                                        <a href="/pengguna/hapus/{{ $p->id }}"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach

                                @if(count($pengguna) == 0)
                                <tr class="text-center">
                                    <H1><td colspan="7">Data Tidak Ditemukan</td></H1>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <a href="/pengguna/tambah" class="btn btn-primary"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp; Tambah Pengguna</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>