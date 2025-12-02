<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample mahasiswa data
        $mahasiswaList = [
            // Angkatan 2022
            ['nim' => '2022001', 'nama' => 'Ahmad Fauzi', 'angkatan' => '2022', 'kelas' => 'A1'],
            ['nim' => '2022002', 'nama' => 'Siti Nurhaliza', 'angkatan' => '2022', 'kelas' => 'A1'],
            ['nim' => '2022003', 'nama' => 'Budi Santoso', 'angkatan' => '2022', 'kelas' => 'A1'],
            ['nim' => '2022004', 'nama' => 'Rina Wati', 'angkatan' => '2022', 'kelas' => 'A1'],
            ['nim' => '2022005', 'nama' => 'Dedi Kusmana', 'angkatan' => '2022', 'kelas' => 'A1'],

            // Angkatan 2023
            ['nim' => '2023001', 'nama' => 'Sari Rahmawati', 'angkatan' => '2023', 'kelas' => 'A1'],
            ['nim' => '2023002', 'nama' => 'Andika Pratama', 'angkatan' => '2023', 'kelas' => 'A1'],
            ['nim' => '2023003', 'nama' => 'Lina Marlina', 'angkatan' => '2023', 'kelas' => 'A1'],
            ['nim' => '2023004', 'nama' => 'Rahmat Hidayat', 'angkatan' => '2023', 'kelas' => 'A1'],
            ['nim' => '2023005', 'nama' => 'Dewi Sartika', 'angkatan' => '2023', 'kelas' => 'A1'],

            // Angkatan 2024
            ['nim' => '2024001', 'nama' => 'Muhammad Rizki', 'angkatan' => '2024', 'kelas' => 'A1'],
            ['nim' => '2024002', 'nama' => 'Nur Azizah', 'angkatan' => '2024', 'kelas' => 'A1'],
            ['nim' => '2024003', 'nama' => 'Indra Gunawan', 'angkatan' => '2024', 'kelas' => 'A1'],
            ['nim' => '2024004', 'nama' => 'Fitri Handayani', 'angkatan' => '2024', 'kelas' => 'A1'],
            ['nim' => '2024005', 'nama' => 'Arief Rahman', 'angkatan' => '2024', 'kelas' => 'A1'],

            // Angkatan 2025
            ['nim' => '2025001', 'nama' => 'Dian Permata', 'angkatan' => '2025', 'kelas' => 'A1'],
            ['nim' => '2025002', 'nama' => 'Eko Prasetyo', 'angkatan' => '2025', 'kelas' => 'A1'],
            ['nim' => '2025003', 'nama' => 'Maya Sari', 'angkatan' => '2025', 'kelas' => 'A1'],
            ['nim' => '2025004', 'nama' => 'Hendra Wijaya', 'angkatan' => '2025', 'kelas' => 'A1'],
            ['nim' => '2025005', 'nama' => 'Putri Amelia', 'angkatan' => '2025', 'kelas' => 'A1'],
        ];

        foreach ($mahasiswaList as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}
