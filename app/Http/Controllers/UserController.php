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

    public function peserta_approve($id)
    {
        $status = User::where('id', $id)->update(['status' => 'active']);
        if ($status) {
            return redirect('/user')->with('notif', [
                'status' => true,
                'msg' => 'berhasil approve'
            ]);
        }
    }

    public function delete($id)
    {
        $deleteuser = User::where('id', $id)->delete();
        if ($deleteuser) {
            return redirect('/user')->with('message', [
                'msg' => 'berhasil menghapus data'
            ]);
        }
    }

    public function edit(){
        return view('dashboard/edit');
    }

    public function update(Request $request, $id)
    {
        $user = Peserta::where('user_id',$id)->first();
        // dd($user);
        $user->nama = $request->input('nama');
        $user->nisn = $request->input('nisn');
        $user->jurusan = $request->input('jurusan');
        $user->jenis_kelamin = $request->input('jenis_kelamin');
        $user->no_telepon = $request->input('no_telepon');
        // $user->save();

        return redirect('/update');
        // return redirect('/update', ['id', $user->id])->with('succes', 'data berhasil diperbarui');

        // return view('dashboard/edit', compact('user'));
    }
}
