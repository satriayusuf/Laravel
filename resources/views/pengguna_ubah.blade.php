<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')   }}">
    <title>Ubah Data Pengguna / User</title>

    <style>
        .btn-warning {
            float: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>Pengubahan Data Pengguna / User</h3>
                    </div>
                    <div class="card-body">

                        <form action="/pengguna/update/{{ $pengguna->id }}" method="post">

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $pengguna->nama }}">

                                @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control"
                                    value="{{ $pengguna->no_telepon }}">

                                @if($errors->has('no_telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telepon') }}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control"
                                        value="{{ $pengguna->alamat }}">

                                    @if($errors->has('alamat'))
                                    <div class="text-danger">
                                        {{ $errors->first('alamat') }}
                                    </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ $pengguna->email }}">

                                    @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="" id="" class="btn btn-success" value="Simpan">
                                <a href="/pengguna" class="btn btn-warning">Batal</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>