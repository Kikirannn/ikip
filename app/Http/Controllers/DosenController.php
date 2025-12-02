<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $dosen = Dosen::query()
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'LIKE', "%{$search}%")
                    ->orWhere('gelar', 'LIKE', "%{$search}%");
            })
            ->orderBy('nama')
            ->paginate(20);

        return view('dosen.index', compact('dosen', 'search'));
    }
}
