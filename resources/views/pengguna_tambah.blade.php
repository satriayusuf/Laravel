<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Penambahan Pengguna / User</title>

    <style>
        .btn-primary {
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
                        <h3>Penambahan Data Pengguna / User</h3>
                    </div>
                    <div class="card-body">
                        <form action="/pengguna/store" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama">

                                @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" placeholder="Nomor telepon">

                                @if($errors->has('no_telepon'))
                                <div class="text-danger">
                                    {{ $errors->first('no_telepon') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email">

                                @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>

                                @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Simpan">
                                <a href="/pengguna" class="btn btn-primary">Kembali</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>