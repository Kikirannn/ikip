<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKuliah extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kuliah';

    protected $fillable = [
        'mata_kuliah_id',
        'dosen_id',
        'ruangan_id',
        'hari',
        'waktu_mulai',
        'waktu_selesai',
        'angkatan',
        'kelas',
    ];

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }
}
