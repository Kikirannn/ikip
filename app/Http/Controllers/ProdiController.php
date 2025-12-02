<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::with([
            'misi' => function ($query) {
                $query->orderBy('urutan');
            },
            'tujuan' => function ($query) {
                $query->orderBy('urutan');
            }
        ])->first();

        return view('prodi.index', compact('prodi'));
    }
}
