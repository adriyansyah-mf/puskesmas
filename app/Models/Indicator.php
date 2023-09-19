<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    use HasFactory;

    // protected $fillable = ['program_id', 'name', 'precentation_target', 'target'];

    protected $guarded = ['id'];

    public function program_value()
    {
        return $this->hasMany(ParogramValue::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function laporan_kinerja()
    {
        return $this->hasMany(LaporanKinerja::class);
    }

}
