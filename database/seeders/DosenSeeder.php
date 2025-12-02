<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenList = [
            ['nama' => 'Prof. Dr. H. Enceng Mulyasa', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Ema Aprianti', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Wedi Fitriana', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dr. Nandang Rukanda', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Damo Manuno', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dr. Lenny Nuraeni', 'gelar' => 'M.Pd', 'nidn' => '0429018601'],
            ['nama' => 'Dr. Ansori', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Nunu Mahmud Firdaus', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dr. Novi Widiastuti', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dr. Ir. H. Agus Hasbi Noor', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dra. Husen Nana Gunawan', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Anita Rakhman', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dr. Septi Mara', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Evi Karevisiti', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dewi Safitri Elshaf', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Latifah', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Prita Kartika', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Mariani Eta Niagarun', 'gelar' => 'SE, MM', 'nidn' => null],
            ['nama' => 'Rabih Insyah', 'gelar' => 'M.Pd', 'nidn' => null],
            ['nama' => 'Dr. Asep Samsudin', 'gelar' => 'M.Pd', 'nidn' => '0423038004'],
            ['nama' => 'Tim Dosen', 'gelar' => null, 'nidn' => null],
        ];

        foreach ($dosenList as $dosen) {
            Dosen::create($dosen);
        }
    }
}
