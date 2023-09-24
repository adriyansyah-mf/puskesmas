<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class month extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function evaluasi()
    {
        return $this->hasMany(Evaluasi::class);
    }

    public function laporan_kinerja()
    {
        return $this->hasMany(LaporanKinerja::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
