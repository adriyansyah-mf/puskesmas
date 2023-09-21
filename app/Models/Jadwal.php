<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function month()
    {
        return $this->belongsTo(Month::class);
    }
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function indicator()
    {
        return $this->belongsTo(Indicator::class);
    }
}
