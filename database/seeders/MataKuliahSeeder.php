<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataKuliahList = [
            ['kode' => '4212032105', 'nama' => 'Konsep Dasar Pendidikan Masyarakat', 'sks' => 3],
            ['kode' => '4212032106', 'nama' => 'Andragogi', 'sks' => 2],
            ['kode' => '4212032107', 'nama' => 'Psikologi Sosial', 'sks' => 2],
            ['kode' => '4212032101', 'nama' => 'Pendidikan Agama', 'sks' => 2],
            ['kode' => '4212032102', 'nama' => 'Pendidikan Pancasila', 'sks' => 2],
            ['kode' => '4212032104', 'nama' => 'Pendidikan Sepanjang Hayat', 'sks' => 2],
            ['kode' => '4212032108', 'nama' => 'Filsafat Sosial', 'sks' => 3],
            ['kode' => '4212032109', 'nama' => 'Sosiologi', 'sks' => 2],
            ['kode' => '4212032103', 'nama' => 'Pendidikan Keluarga', 'sks' => 2],
            ['kode' => '4212032508', 'nama' => 'Kapita Selekita Pendidikan Keksaraan', 'sks' => 3],
            ['kode' => '4212032507', 'nama' => 'Kapita Selekita Pendidikan Kesetaraan', 'sks' => 3],
            ['kode' => '4212032405', 'nama' => 'Metode Penelitian Pendidikan Masyarakat', 'sks' => 2],
            ['kode' => '4212033506', 'nama' => 'PTK Pendidikan Masyarakat', 'sks' => 2],
            ['kode' => '4212032502', 'nama' => 'Aplikasi Statistika dalam Penelitian Pendidikan Masyarakat', 'sks' => 2],
            ['kode' => '4212033507', 'nama' => 'Pendidikan Bela Nagara', 'sks' => 2],
            ['kode' => '4212033505', 'nama' => 'Psikologi Pendidikan dan Kurikulum Pembelajaran', 'sks' => 2],
            ['kode' => '4212032602', 'nama' => 'Kewirausahaan Masyarakat', 'sks' => 2],
            ['kode' => '4212033501', 'nama' => 'Seni Sunda', 'sks' => 2],
            ['kode' => '4212032301', 'nama' => 'Pengelolaan Program Pemberdayaan Masyarakat', 'sks' => 3],
            ['kode' => '4212032302', 'nama' => 'Pengorganisasian Sosial', 'sks' => 3],
            ['kode' => '4212032505', 'nama' => 'Pendidikan Lingkungan Hidup', 'sks' => 2],
            ['kode' => '4212032306', 'nama' => 'Aplikasi TIK Dalam Pendidikan Masyarakat', 'sks' => 3],
            ['kode' => '4212032303', 'nama' => 'Pendidikan Kursus dan Pelatihan', 'sks' => 2],
            ['kode' => '4212032307', 'nama' => 'Strategi dan Metode Pembelajaran Masyarakat', 'sks' => 3],
            ['kode' => '4212032308', 'nama' => 'Sosial Marketing', 'sks' => 2],
            ['kode' => '4212032304', 'nama' => 'Penyuluhan Pembangunan Masyarakat', 'sks' => 2],
            ['kode' => '4212033703', 'nama' => 'Inovasi Penelitian', 'sks' => 3],
            ['kode' => '4212033704', 'nama' => 'Strategi Pengorganisasian dan Publikasi Karya Ilmiah', 'sks' => 3],
            ['kode' => '4212033706', 'nama' => 'Warkolahop Pengelola Ekowisata', 'sks' => 2],
            ['kode' => '4212033708', 'nama' => 'Praktik Wisata Edukasi', 'sks' => 2],
            ['kode' => '4212033707', 'nama' => 'Warkolahop Pengelolaan Program Konservasi Lingkungan', 'sks' => 2],
            ['kode' => '4212033705', 'nama' => 'Bahasa Inggris Untuk Karya Ilmiah', 'sks' => 2],
            ['kode' => '4212033701', 'nama' => 'Kuliah Kerja Nyata (KKN)', 'sks' => 4],
            ['kode' => '4212033702', 'nama' => 'Praktik Pengasuhan Lapangan (PPL)', 'sks' => 4],
        ];

        foreach ($mataKuliahList as $mataKuliah) {
            MataKuliah::create($mataKuliah);
        }
    }
}
