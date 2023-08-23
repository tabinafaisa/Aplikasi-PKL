<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Humas;

class HumasController extends Controller
{
    public function index(){
        return view('daftar/humas');
    }

    public function daftar(Request $request) {
        $validate = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'nip' => 'required',
            'nama' => 'required',
        ]);

        $user = [
            'username' => $request->username,
            'password' => $request->password,
            'hak_akses' => 'humas',
            'status' => 'inactive'
        ];

        $createUser = User::create($user);

        $humas = [
            'user_id' => $createUser->id,
            'nama' => $request->nama,
            'nip' => $request->nip
        ];

        $createhumas = Humas::create($humas);
        return $createhumas;
    }

    public function show() {
        return view('humas/index');
    }
}
