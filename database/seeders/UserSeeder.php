<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;
use Database\Seeders\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserSeeder extends Seeder
{
    /**
     * Run the database see
     */

    public function run()
    {
        FacadesDB::table('users')->insert([
            'username' => 'firhan',
            'alamat' => 'jl. mawar',
            'no_telp' => '085691800890',
            'password' => bcrypt('123')
        ]);

    }
}
