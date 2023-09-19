<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Month;

class MonthController extends Controller
{
    public static function listing_month()
    {
        return Month::select('months.*')->get();
    }

    public static function get_name_by_month($month)
    {
        $data = Month::select('months.name')->where('months.month', $month)->pluck('name');

        return $data;
    }

    public static function get_id_by_name($name)
    {
        $data = Month::select('months.id')->where('months.name', $name)->first();

        return $data->id;
    }

    public static function get_name_by_id($id)
    {
        $data = Month::select('months.id')->where('months.id', $id)->first();

        return $data->name;
    }
}
