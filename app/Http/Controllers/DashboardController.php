<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\JadwalKuliah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with(['misi', 'tujuan'])->first();

        $stats = [
            'total_dosen' => Dosen::count(),
            'total_mahasiswa' => Mahasiswa::count(),
            'total_mata_kuliah' => MataKuliah::count(),
            'total_jadwal' => JadwalKuliah::count(),
        ];

        return view('dashboard', compact('prodi', 'stats'));
    }
}
