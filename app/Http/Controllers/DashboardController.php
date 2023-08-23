<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Peserta;
use App\Models\Pembimbing;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return Auth::user();
        return view('dashboard/index');
    }

}
