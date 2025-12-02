<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $mataKuliah = MataKuliah::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('kode', 'LIKE', "%{$search}%");
            })
            ->orderBy('kode')
            ->paginate(30);

        return view('mata-kuliah.index', compact('mataKuliah', 'search'));
    }
}
