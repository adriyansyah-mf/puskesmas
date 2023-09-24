<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use Carbon\Carbon;

class JadwalController extends Controller
{
    public function index($prog)
    {
        $now = Carbon::now();

        $filter_month = MonthController::listing_month();
        $month = MonthController::get_name_by_month($now->month);

        $data = Jadwal::join('months', 'jadwals.month_id', '=', 'months.id')
        ->join('years', 'jadwals.year_id', '=', 'years.id')
        ->where('months.month', $now->month)
        ->where('years.year', $now->year)
        ->select('jadwals.*')
        ->orderBy('jadwals.date', 'asc')
        ->orderBy('jadwals.program', 'asc')
        ->get();
        
        return view('jadwal/jadwal', [
            "title" => "$prog",
            "path" => "jadwal",
            "filter_month" => $filter_month,
            "month" => $month[0],
            "year" => $now->year,
            "data" => $data
        ]);
    }

    public function filter($prog, $year, $month)
    {

        $filter_month = MonthController::listing_month();
        $new_month = MonthController::get_name_by_month($month);

        $data = Jadwal::join('months', 'jadwals.month_id', '=', 'months.id')
        ->join('years', 'jadwals.year_id', '=', 'years.id')
        ->where('months.month', $month)
        ->where('years.year', $year)
        ->select('jadwals.*')
        ->orderBy('jadwals.date', 'asc')
        ->orderBy('jadwals.program', 'asc')
        ->get();
        
        return view('jadwal/jadwal', [
            "title" => "$prog",
            "path" => "jadwal",
            "filter_month" => $filter_month,
            "month" => $new_month[0],
            "year" => $year,
            "data" => $data
        ]);
    }

    public function add(Request $request, $prog, $year, $month)
    {
        $id_year = YearController::reate_or_create($year);
        $id_month = MonthController::get_id_by_name($month);

        Jadwal::create([
            'year_id' => $id_year,
            'month_id' => $id_month,
            'date' => intval($request->date),
            'day' => $request->day,
            'program' => $request->prog,
            'activity' => $request->activity,
            'place' => $request->place,
            'officer' => $request->officer,
        ]);

        $direct = "jadwal/{$prog}";
        return redirect($direct)->withSuccess('Berhasil tambah data!');
    }

    public function update(Request $request, $prog, $year, $month)
    {
        $id = $request->editItemId;
        $id_month = MonthController::get_id_by_name($month);
        $id_year = YearController::reate_or_create($year);
        $requestData = $request->only([
            'year_id' => $id_year,
            'month_id' => $id_month,
            'date' => $request->date,
            'day' => $request->day,
            'program' => $request->prog,
            'activity' => $request->activity,
            'place' => $request->place,
            'officer' => $request->officer
        ]);

        unset($requestData['_token']);
        unset($requestData['_method']);
        unset($requestData['editItemId']);

        $data = Jadwal::find($id);
    
        if ($data) {
            foreach ($requestData as $key => $value) {
                if ($value !== null) {
                    $data->{$key} = $value;
                }
            }
    
            $data->save();
        }
            
        return back()->with('success', 'Berhasil update data!');
    }

    public function delete(Request $request, $prog)
    {        
        Jadwal::destroy($request->deleteItemId);

        return back()->with('success', 'Berhasil hapus data!');
    }

}
