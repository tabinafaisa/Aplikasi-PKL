<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = [
        'user_id', 'nama', 'nisn', 'jurusan', 'jenis_kelamin', 'no_telepon'
    ];
}
