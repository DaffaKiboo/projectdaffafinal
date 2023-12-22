<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'npm' => '2201170042',
            'nama' => 'M. Daffa T. H.',
            'alamat' => 'Padang',
            'no_hp' => '081234567890',
        ]);

    }
}
