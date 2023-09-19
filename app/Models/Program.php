<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function indicator()
    {
        return $this->hasMany(Indicator::class);
    }
    public function evaluasi()
    {
        return $this->hasMany(evaluasi::class);
    }
}
