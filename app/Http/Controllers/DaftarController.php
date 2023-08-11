<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index() {
        return view('/daftar/daftar');
    }

    public function pembimbing() {
        return view('/daftar/pembimbing');
    }

    public function peserta() {
        return view('daftar/peserta');
    }

    public function daftarpembimbing()
    {
        return view('pembimbing/index');
    }

    public function daftarpeserta()
    {
        return view('peserta/index');
    }
}
