<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Pengguna extends Model
{
    protected $table = "Pengguna";

    protected $fillable = ['id', 'nama', 'no_telepon', 'email', 'alamat' ];

    public function sortir() {
        $pengguna = DB::table('pengguna')
            ->orderBy('created_at', 'DESC')
            ->get();
    }
}
