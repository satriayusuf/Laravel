<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
        $pengguna = Pengguna::all();
        return view('pengguna', ['pengguna' => $pengguna]);
    }

    public function tambah() {
        return view('pengguna_tambah');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'nama' => 'required|min:5|max:255',
            'no_telepon' => 'required|min:12|max:25',
            'email' => 'required|max:50',
            'alamat' => 'required|max:250'
        ]);

        Pengguna::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect('/pengguna');
    }

    public function edit($id) {
        $pengguna = Pengguna::find($id);
        return view('pengguna_ubah', ['pengguna' => $pengguna]);
    }

    public function update($id, Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'email' => 'required'
        ]);

        $pengguna = Pengguna::find($id);
        $pengguna->nama = $request->nama;
        $pengguna->no_telepon = $request->no_telepon;
        $pengguna->alamat = $request->alamat;
        $pengguna->email = $request->email;
        $pengguna->save();
        return redirect('/pengguna');
    }

    public function delete($id)
    {
    	$pengguna = Pengguna::find($id);
    	$pengguna->delete();
    	return redirect('/pengguna');
    }
}
