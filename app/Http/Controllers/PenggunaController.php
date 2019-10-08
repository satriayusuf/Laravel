<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
    	$pengguna = Pengguna::all();
    	return view('pengguna', ['pengguna' => $pengguna]);
    }

    public function delete($id)
    {
    	$pengguna = Pengguna::find($id);
    	$pengguna->delete();
    	return redirect('/pengguna');
    }
}
