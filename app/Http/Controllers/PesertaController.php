<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\User;

class PesertaController extends Controller
{
    public function index()
    {
        return view('daftar/peserta');
    }

    public function daftar(Request $request) {
        $validate = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'nisn' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'jenis_kelamin' => 'required',
            'no_telepon' => 'required'
        ]);
        
        $user = [
            'username' => $request->username,
            'password' => $request->password,
            'hak_akses' => 'peserta',
            'status' => 'inactive'
        ];

        $createUser = User::create($user);
        // return $createUser;
        
        $peserta = [
            'user_id' => $createUser->id,
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telepon' => $request->no_telepon

        ];

        $createPeserta = Peserta::create($peserta);
        return redirect('/login');
    }

    public function show() {
        return view('peserta/index');
    }
}
