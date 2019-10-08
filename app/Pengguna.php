<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "Pengguna";

    protected $fillable = ['id', 'nama', 'no_telepon', 'email', 'alamat' ];
}
