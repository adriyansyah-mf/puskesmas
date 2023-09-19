<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public static function read_by_name($name){
        $data = Program::where('programs.name', $name)->get();
        
            return $data;
    }
    public static function get_id_by_name($name)
    {
        $data = Program::select('programs.id')->where('programs.name', $name)->first();

        return $data->id;
    }
}
