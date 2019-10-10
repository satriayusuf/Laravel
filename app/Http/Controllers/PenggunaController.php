<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{  

    public function index(Request $request){

        $pengguna = Pengguna::all();
         return view('pengguna', ['pengguna' => $pengguna]);
    }

    public function cari(Request $request){
        
        if($request->has('cari')){
            $pengguna = pengguna::where('nama', 'Like', "%{$request->cari}%")
                                  ->orWhere('alamat', 'Like' ,"%{$request->cari}%")
                                  ->orWhere('email', 'Like', "%{$request->cari}%")
                                  ->get();
        }
            return view('pengguna', ['pengguna' => $pengguna]);
    }

    public function tambah() {
        return view('pengguna_tambah');
    }

    public function store(Request $request) {

        $message = [
            'required' => 'Harap isi bidang ini',
            'min' => 'Bidang ini membutuhkan setidaknya :min karakter',
            'max' => 'Bidang ini tidak boleh melebihi :max karakter',
            'numeric' => 'Bidang ini harus berisi angka',
            //'alpha' => 'Bidang ini harus berisi huruf'
        ];

        $this->validate($request,[
            'nama' => 'required|min:2|max:255',
            'no_telepon' => 'required|numeric|min:8',
            'email' => 'required|max:50',
            'alamat' => 'required|max:250'
        ],$message);

        Pengguna::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);

        return redirect('/pengguna')->with('simpan', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Data berhasil di simpan!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ');
    }

    public function edit($id) {
        $pengguna = Pengguna::find($id);
        return view('pengguna_ubah', ['pengguna' => $pengguna]);
    }

    public function update($id, Request $request) {

        $message = [
            'required' => 'Harap isi bidang ini',
            'min' => 'Bidang ini membutuhkan setidaknya :min karakter',
            'max' => 'Bidang ini tidak boleh melebihi :max karakter',
            'numeric' => 'Bidang ini harus berisi angka',
            //'alpha' => 'Bidang ini harus berisi huruf'
        ];

        $this->validate($request, [
            'nama' => 'required|min:2|max:255',
            'no_telepon' => 'required|numeric|min:8',
            'alamat' => 'required|max:50',
            'email' => 'required|max:250'
        ],$message);

        $pengguna = Pengguna::find($id);
        $pengguna->nama = $request->nama;
        $pengguna->no_telepon = $request->no_telepon;
        $pengguna->alamat = $request->alamat;
        $pengguna->email = $request->email;
        $pengguna->save();
        return redirect('/pengguna')->with('ubah', '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Data berhasil di ubah!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ');
    }

    public function delete($id)
    {
    	$pengguna = Pengguna::find($id);
        $pengguna->delete();
        return redirect('/pengguna')->with('hapus','
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Data berhasil di hapus!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        ');
    }
}