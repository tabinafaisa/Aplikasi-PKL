<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Humas;
use App\Models\Pembimbing;
use App\Models\Peserta;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datahumas = [
            'username' => 'humas',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'humas',
            'status' => 'active'
        ];
        
        $user = User::create($datahumas);

        $humas = [
            'user_id' => $user->id,
            'NIP' => 32845682,
            'nama' => 'test'
        ];

        Humas::create($humas);

        $datapembimbing = [
            'username' => 'pembimbing',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'pembimbing',
            'status' => 'active'
        ];

        $user = User::create($datapembimbing);

        $pembimbing = [
            'user_id' => $user->id,
            'nip' => 76587545,
            'nama' => 'pembimbing',
            'keahlian' => 'rpl'
        ];

        Pembimbing::create($pembimbing);

        $datapeserta = [
            'username' => 'peserta',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'peserta',
            'status' => 'active'
        ];

        $user = User::create($datapeserta);

        $peserta = [
            'user_id' => $user->id,
            'nisn' => '653456548',
            'nama' => 'ina',
            'jurusan' => 'rpl',
            'jenis_kelamin' => 'perempuan',
            'no_telepon' => '0862316467'
        ];

        Peserta::create($peserta);


    }
}
