<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index ()
    {
        $pengguna = DB::table('pengguna')->get();

        return view('pengguna' , ['pengguna' => $pengguna]);
    }

     public function cari(Request $request)
    {
	    $cari = $request->cari;

	    $pengguna = DB::table('pengguna')
                    ->where('nama', 'Like', "%{$request->cari}%")
                    ->orWhere('alamat', 'Like' ,"%{$request->cari}%")
                    ->orWhere('email', 'Like', "%{$request->cari}%")
	                ->get();

	    return view('pengguna',['pengguna' => $pengguna]);  

    }
}

