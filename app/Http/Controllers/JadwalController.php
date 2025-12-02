<?php

namespace App\Http\Controllers;

use App\Models\JadwalKuliah;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(Request $request)
    {
        $hari = $request->input('hari');
        $angkatan = $request->input('angkatan');
        $kelas = $request->input('kelas');

        $jadwal = JadwalKuliah::with(['mataKuliah', 'dosen', 'ruangan'])
            ->when($hari, function ($query, $hari) {
                return $query->where('hari', $hari);
            })
            ->when($angkatan, function ($query, $angkatan) {
                return $query->where('angkatan', 'LIKE', "%{$angkatan}%");
            })
            ->when($kelas, function ($query, $kelas) {
                return $query->where('kelas', $kelas);
            })
            ->orderBy('hari')
            ->orderBy('waktu_mulai')
            ->get();

        // Group by hari for calendar view
        $jadwalByHari = $jadwal->groupBy('hari');

        $hariList = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $angkatanList = JadwalKuliah::distinct()->pluck('angkatan')->sort()->reverse();

        return view('jadwal.index', compact('jadwal', 'jadwalByHari', 'hariList', 'angkatanList', 'hari', 'angkatan', 'kelas'));
    }
}
