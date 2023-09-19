<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function program_value()
    {
        return $this->hasMany(ParogramValue::class);
    }
    public function evaluasi()
    {
        return $this->hasMany(Evaluasi::class);
    }
    public function laporan_kinerja()
    {
        return $this->hasMany(LaporanKinerja::class);
    }
}
