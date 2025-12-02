<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $fillable = [
        'nama_prodi',
        'fakultas',
        'institusi',
        'akreditasi',
        'visi',
        'sejarah',
        'logo_path',
    ];

    public function misi()
    {
        return $this->hasMany(Misi::class);
    }

    public function tujuan()
    {
        return $this->hasMany(Tujuan::class);
    }
}
