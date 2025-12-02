<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';

    protected $fillable = [
        'nama',
        'gelar',
        'nidn',
        'email',
        'foto_path',
    ];

    public function jadwalKuliah()
    {
        return $this->hasMany(JadwalKuliah::class);
    }

    public function getNamaLengkapAttribute()
    {
        return $this->nama . ($this->gelar ? ', ' . $this->gelar : '');
    }
}
