<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramValue extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function indicator()
    {
        return $this->belongsTo(indicator::class);
    }

}
