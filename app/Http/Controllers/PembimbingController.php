<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembimbing;
use App\Models\User;

class PembimbingController extends Controller
{
    public function index() {
        return view('daftar/pembimbing');
    }

    public function daftar(Request $request){
        $validate = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'nip' => 'required',
            'nama' => 'required',
            'keahlian' => 'required'
        ]);
        
        $user = [
            'username' => $request->username,
            'password' => $request->password,
            'hak_akses' => 'pembimbing',
            'status' => 'inactive'
        ];

        $createUser = User::create($user);

        $pembimbing = [
            'user_id' => $createUser->id,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'keahlian' => $request->keahlian
        ];

        $createPembimbing = Pembimbing::create($pembimbing);
        return $createPembimbing;
    }

    public function show() {
        return view('pembimbing/index');
    }
}
