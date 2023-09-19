<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public static function get_id_by_year($year)
    {
        $data = Year::select('years.id')->where('years.year', $year)->pluck('id');

        return $data;
    }

    public static function read_by_year($year){
        return Year::where('years.year', $year)
            ->select('years.*')
            ->first();
    }

    public static function store($Year, $indicator_id)
    {
        $newYear = Year::create([
            'indicator_id' => $indicator_id,
            'year' => $Year,
        ]);
        return $newYear->id;
    }

    public static function reate_or_create($year)
    {
        $read_year = self::read_by_year($year);

        if ($read_year){
            return $read_year->id;
        }
        else{
            $create = Year::create(["year" => $year]);
            return $create->id;
        }
    }

    public static function get_year_by_id($id)
    {
        $data = Year::select('years.year')->where('years.id', $id)->pluck('year');

        return $data;
    }
}
