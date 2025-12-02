<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JadwalKuliah;
use App\Models\MataKuliah;
use App\Models\Dosen;
use App\Models\Ruangan;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Helper function to find IDs
        $getMataKuliahId = function ($kode) {
            return MataKuliah::where('kode', $kode)->first()?->id;
        };

        $getDosenId = function ($nama) {
            return Dosen::where('nama', 'LIKE', $nama . '%')->first()?->id;
        };

        $getRuanganId = function ($nama) {
            return Ruangan::where('nama', $nama)->first()?->id;
        };

        // Jadwal dari Image 1 (Page 1)
        $jadwalPage1 = [
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032105'),
                'dosen_id' => $getDosenId('Prof. Dr. H. Enceng Mulyasa'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Sabtu',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032106'),
                'dosen_id' => $getDosenId('Ema Aprianti'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Sabtu',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '10:40',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032107'),
                'dosen_id' => $getDosenId('Wedi Fitriana'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Sabtu',
                'waktu_mulai' => '10:40',
                'waktu_selesai' => '12:20',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032101'),
                'dosen_id' => $getDosenId('Dr. Nandang Rukanda'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Kamis',
                'waktu_mulai' => '08:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032102'),
                'dosen_id' => $getDosenId('Damo Manuno'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Kamis',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '10:00',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032104'),
                'dosen_id' => $getDosenId('Dr. Lenny Nuraeni'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Kamis',
                'waktu_mulai' => '10:00',
                'waktu_selesai' => '11:40',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032108'),
                'dosen_id' => $getDosenId('Dr. Ansori'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Jumat',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032109'),
                'dosen_id' => $getDosenId('Nunu Mahmud Firdaus'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Jumat',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '10:40',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032103'),
                'dosen_id' => $getDosenId('Dr. Novi Widiastuti'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Jumat',
                'waktu_mulai' => '10:40',
                'waktu_selesai' => '12:20',
                'angkatan' => '2025/A1',
                'kelas' => 'Reguler',
            ],
        ];

        // Jadwal dari Image 2 (Page 2)
        $jadwalPage2 = [
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032508'),
                'dosen_id' => $getDosenId('Dr. Ir. H. Agus Hasbi Noor'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Senin',
                'waktu_mulai' => '13:00',
                'waktu_selesai' => '15:00',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032507'),
                'dosen_id' => $getDosenId('Dra. Husen Nana Gunawan'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Senin',
                'waktu_mulai' => '15:30',
                'waktu_selesai' => '17:30',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032405'),
                'dosen_id' => $getDosenId('Dr. Lenny Nuraeni'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Selasa',
                'waktu_mulai' => '13:00',
                'waktu_selesai' => '14:40',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033506'),
                'dosen_id' => $getDosenId('Anita Rakhman'),
                'ruangan_id' => $getRuanganId('D9'),
                'hari' => 'Selasa',
                'waktu_mulai' => '14:40',
                'waktu_selesai' => '16:20',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032502'),
                'dosen_id' => $getDosenId('Dr. Septi Mara'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '11:00',
                'waktu_selesai' => '12:00',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033507'),
                'dosen_id' => $getDosenId('Anita Rakhman'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '13:00',
                'waktu_selesai' => '14:00',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033505'),
                'dosen_id' => $getDosenId('Evi Karevisiti'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '14:00',
                'waktu_selesai' => '15:00',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032602'),
                'dosen_id' => $getDosenId('Dewi Safitri Elshaf'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '15:30',
                'waktu_selesai' => '16:30',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033501'),
                'dosen_id' => $getDosenId('Latifah'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '16:30',
                'waktu_selesai' => '17:30',
                'angkatan' => '2023/A1',
                'kelas' => 'Reguler',
            ],
        ];

        // Jadwal dari Image 4 (Page 3)
        $jadwalPage3 = [
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032301'),
                'dosen_id' => $getDosenId('Ema Aprianti'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Senin',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032302'),
                'dosen_id' => $getDosenId('Ema Aprianti'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Senin',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '11:00',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032505'),
                'dosen_id' => $getDosenId('Prita Kartika'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Selasa',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '08:40',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032306'),
                'dosen_id' => $getDosenId('Nunu Mahmud Firdaus'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Selasa',
                'waktu_mulai' => '08:40',
                'waktu_selesai' => '10:20',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032303'),
                'dosen_id' => $getDosenId('Dr. Lenny Nuraeni'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Selasa',
                'waktu_mulai' => '10:20',
                'waktu_selesai' => '12:20',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032307'),
                'dosen_id' => $getDosenId('Dr. Ansori'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032308'),
                'dosen_id' => $getDosenId('Mariani Eta Niagarun'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '10:40',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212032304'),
                'dosen_id' => $getDosenId('Wedi Fitriana'),
                'ruangan_id' => $getRuanganId('Online'),
                'hari' => 'Kamis',
                'waktu_mulai' => '10:40',
                'waktu_selesai' => '12:20',
                'angkatan' => '2024/A1',
                'kelas' => 'Reguler',
            ],
        ];

        // Additional schedule from last image (another page)
        $jadwalPage4 = [
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033703'),
                'dosen_id' => $getDosenId('Nurul Mahmud Firdaus'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Senin',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033704'),
                'dosen_id' => $getDosenId('Dr. Novi Widiastuti'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Senin',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '11:00',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033706'),
                'dosen_id' => $getDosenId('Dewi Safitri Elshaf'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Senin',
                'waktu_mulai' => '11:00',
                'waktu_selesai' => '12:40',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033708'),
                'dosen_id' => $getDosenId('Dr. Hj. Sri Nurhayati'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Selasa',
                'waktu_mulai' => '07:00',
                'waktu_selesai' => '08:40',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033707'),
                'dosen_id' => $getDosenId('Prita Kartika'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Selasa',
                'waktu_mulai' => '08:40',
                'waktu_selesai' => '10:20',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033705'),
                'dosen_id' => $getDosenId('Rabih Insyah'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Kamis',
                'waktu_mulai' => '08:00',
                'waktu_selesai' => '09:00',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033701'),
                'dosen_id' => $getDosenId('Tim Dosen'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Kamis',
                'waktu_mulai' => '09:00',
                'waktu_selesai' => '10:00',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
            [
                'mata_kuliah_id' => $getMataKuliahId('4212033702'),
                'dosen_id' => $getDosenId('Tim Dosen'),
                'ruangan_id' => $getRuanganId('D3'),
                'hari' => 'Kamis',
                'waktu_mulai' => '10:00',
                'waktu_selesai' => '11:00',
                'angkatan' => '2022/A1',
                'kelas' => 'Reguler',
            ],
        ];

        // Insert all jadwal
        $allJadwal = array_merge($jadwalPage1, $jadwalPage2, $jadwalPage3, $jadwalPage4);

        foreach ($allJadwal as $jadwal) {
            // Only create if all required IDs are found
            if ($jadwal['mata_kuliah_id'] && $jadwal['dosen_id'] && $jadwal['ruangan_id']) {
                JadwalKuliah::create($jadwal);
            }
        }
    }
}
