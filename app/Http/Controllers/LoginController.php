<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Peserta;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
        
    }

    public function auth(Request $request)
    {

        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        

        $check = Auth::attempt($validate);
        if(Auth::user()->status == 'inactive'){
            return redirect('/logout');
        }
        // return Auth::check();
        if ($check) {
            return redirect('/');
        } else {
            return redirect('/login')->with('notif', [
                'status' => false,
                'msg' => 'login gagal, username atau password salah'
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function daftar()
    {
        return view('daftar/daftar');
    }
}
