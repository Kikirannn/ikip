<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ruangan;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ruanganList = [
            ['nama' => 'D9', 'gedung' => 'D', 'kapasitas' => 40],
            ['nama' => 'D3', 'gedung' => 'D', 'kapasitas' => 40],
            ['nama' => 'Online', 'gedung' => null, 'kapasitas' => null],
        ];

        foreach ($ruanganList as $ruangan) {
            Ruangan::create($ruangan);
        }
    }
}
