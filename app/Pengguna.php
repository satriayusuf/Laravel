<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pengguna extends Model
{
    protected $table = "Pengguna";

    protected $fillable = ['id', 'nama', 'no_telepon', 'email', 'alamat' ];

    use Sortable;

    public $sortable = ['id', 'nama', 'no_telepon', 'email', 'alamat', 'created_at', 'updated_at'];
}
