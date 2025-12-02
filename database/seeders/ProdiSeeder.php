<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = Prodi::create([
            'nama_prodi' => 'Pendidikan Masyarakat',
            'fakultas' => 'Fakultas Ilmu Pendidikan',
            'institusi' => 'IKIP SILIWANGI',
            'akreditasi' => 'UNGGUL',
            'visi' => 'Terwujudnya Program Studi Pendidikan masyarakat yang Memiliki Daya Saing, Unggul dan Inovatif dalam Pendidikan Masyarakat berbasis Entrepreneurship di tingkat Nasional pada tahun 2037.',
            'sejarah' => 'Pendidikan luar sekolah IKIP Siliwangi pertama kali mendapatkan surat pemberian status terdaftar dari Jurusan/Program Studi di Lingkungan Sekolah Tinggi Keguruan dan Ilmu Pendidikan Siliwangi di Bandung berdasarkan SK Menteri Pendidikan dan Kebudayaan Republik Indonesia dengan Nomor: 0631/0/1987, diterbitkan di Jakarta tanggal 10 Oktober 1987 ditandatangani oleh Sekretaris Jenderal Bambang Triantoro. Pada Tahun 2020 Pendidikan Luar sekolah IKIP Siliwangi berubah nama menjadi Pendidikan masyarakat berdasarkan nomor 520/M/2020 di tahun 2020',
        ]);

        // Misi
        $misiList = [
            'Menyelenggarakan pendidikan dan pengajaran yang inovatif serta menjadi rujukan untuk menghasilkan tenaga pendidik masyarakat profesional serta mampu melahirkan entrepreneur sesuai kebutuhan masyarakat',
            'Melakukan Penelitian-Penelitian Inovatif, Publikasi Ilmiah dan Penciptaan HKI untuk menyelenggarakan kualitas Penyelenggaraan Pendidikan-inovatif dalam pengelolaan PNF yang sesuai dengan perkembangan ilmu pengetahuan, ilmu dan teknologi untuk mengembangkan demokratisasi, sehingga menghasilkan proses pembelajaran yang bermutu dan relevan dengan harapan dan kebutuhan masyarakat dalam era globalisasi',
            'Melaksanakan kegiatan pengabdian kepada masyarakat melalui penyelenggaraan dan penerapan ilmu Pendidikan masyarakat berbasis entrepreneurship',
            'Mengembangkan dan meningkatkan jalinan kemitraan dengan stakeholder, user, perguruan tinggi lain dan lembaga-lembaga pada tingkat nasional dan internasional untuk meningkatkan murah dan fungsi program studi Pendidikan Masyarakat',
        ];

        foreach ($misiList as $index => $misi) {
            $prodi->misi()->create([
                'deskripsi' => $misi,
                'urutan' => $index + 1,
            ]);
        }

        // Tujuan
        $tujuanList = [
            'Menghasilkan tenaga pendidik yang berjiwa entrepreneur, memiliki kemampuan dalam mengembangkan proses pembelajaran kreatif dan inovatif serta mampu menyelesaikan masalah-masalah dalam bidang pendidikan masyarakat yang unggul dan berdaya saing global, bersifat entrepreneurship',
            'Menghasilkan tenaga pendidik yang memiliki jiwa entrepreneurship dalam melakukan penelitian-penelitian inovatif, publikasi ilmiah dan penciptaan HKI untuk menyelesaikan masalah-masalah dalam bidang pendidikan masyarakat yang unggul dan berdaya saing global',
            'Menghasilkan tenaga pendidik yang Inovatif dan memiliki jiwa entrepreneurship dalam pengabdian masyarakat dan mampu menjadi solusi untuk menyelesaikan masalah-masalah di masyarakat dalam bidang pendidikan Masyarakat yang unggul dan berdaya saing global',
            'Menghasilkan tenaga pendidik yang memiliki jiwa entrepreneurship dan mampu mengembangkan jejaring kemitraan yang luas pada tingkat nasional dan internasional',
        ];

        foreach ($tujuanList as $index => $tujuan) {
            $prodi->tujuan()->create([
                'deskripsi' => $tujuan,
                'urutan' => $index + 1,
            ]);
        }
    }
}
