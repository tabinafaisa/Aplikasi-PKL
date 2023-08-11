<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humas extends Model
{
    protected $table = 'humas';
    protected $fillable = ['user_id', 'nama', 'nip'];
}
