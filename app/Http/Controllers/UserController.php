<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembimbing;
use App\Models\Peserta;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $pembimbing = Pembimbing::join('users', 'pembimbing.user_id', '=', 'users.id')->get();
        $peserta = Peserta::join('users', 'peserta.user_id', '=', 'users.id')->get();
        // return $peserta;
        return view('dashboard/user', ['pembimbing' => $pembimbing, 'peserta' => $peserta]);
    }

    public function peserta_approve($id) {
      $status = User::where('id', $id)->update(['status' => 'active']);
        if($status){
            return redirect('/user')->with('notif', [
                'status' => true,
                'msg' => 'berhasil approve'
            ]);
        }
    }
}
