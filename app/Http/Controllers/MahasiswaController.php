<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $angkatan = $request->input('angkatan');

        $mahasiswa = Mahasiswa::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('nim', 'LIKE', "%{$search}%");
            })
            ->when($angkatan, function ($query, $angkatan) {
                return $query->where('angkatan', $angkatan);
            })
            ->orderBy('angkatan', 'desc')
            ->orderBy('nama')
            ->paginate(20);

        $angkatanList = Mahasiswa::distinct()->pluck('angkatan')->sort()->reverse();

        return view('mahasiswa.index', compact('mahasiswa', 'search', 'angkatan', 'angkatanList'));
    }
}
