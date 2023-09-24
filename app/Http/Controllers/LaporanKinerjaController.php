<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\LaporanKinerja;
use App\Http\Controllers\IndicatorController;

class LaporanKinerjaController extends Controller
{
    public function index($prog)
    {
        $now = Carbon::now();

        $filter_month = MonthController::listing_month();
        $month = MonthController::get_name_by_month($now->month);

        $data = LaporanKinerja::join('months', 'laporan_kinerjas.month_id', '=', 'months.id')
        ->join('indicators', 'laporan_kinerjas.indicator_id', '=', 'indicators.id')
        ->join('programs', 'indicators.program_id', '=', 'programs.id')
        ->join('years', 'laporan_kinerjas.year_id', '=', 'years.id')
        ->where('months.month', $now->month)
        ->where('years.year', $now->year)
        ->where('programs.name', $prog)
        ->select('laporan_kinerjas.*')
        ->get();

        return view('laporan_kinerja/index', [
            "title" => "$prog",
            "path" => "laporan_kinerja",
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

        $data = LaporanKinerja::join('months', 'laporan_kinerjas.month_id', '=', 'months.id')
        ->join('indicators', 'laporan_kinerjas.indicator_id', '=', 'indicators.id')
        ->join('programs', 'indicators.program_id', '=', 'programs.id')
        ->join('years', 'laporan_kinerjas.year_id', '=', 'years.id')
        ->where('months.id', $month)
        ->where('years.year', $year)
        ->where('programs.name', $prog)
        ->select('laporan_kinerjas.*')
        ->get();

        return view('laporan_kinerja/index', [
            "title" => "$prog",
            "path" => "laporan_kinerja",
            "filter_month" => $filter_month,
            "month" => $new_month[0],
            "year" => $year,
            "data" => $data
        ]);
    }

    public function add(Request $request, $prog, $year, $month)
    {
        $id_indicator = IndicatorController::store_all($request->indicator, $prog);
        $id_year = YearController::reate_or_create($year);
        $id_month = MonthController::get_id_by_name($month);

        LaporanKinerja::create([
            'year_id' => $id_year,
            'month_id' => $id_month,
            'indicator_id' => $id_indicator,
            'target' => $request->target,
            'unit' => $request->unit,
            'formula_target' => $request->formula_target,
            'abs_target' => $request->abs_target,
            'jeketro' => $request->jeketro ?? 0,
            'ngroto' => $request->ngroto ?? 0,
            'trisari' => $request->trisari ?? 0,
            'saban' => $request->saban ?? 0,
            'mlilir' => $request->mlilir ?? 0,
            'ginggangtani' => $request->ginggangtani ?? 0,
            'gelapan' => $request->gelapan ?? 0,
            'penadaran' => $request->penadaran ?? 0,
            'other' => $request->other ?? 0,
            'achievements' => $request->achievements ?? 0
        ]);

        $direct = "report/{$prog}/{$year}/{$id_month}";
        return redirect($direct)->withSuccess('Berhasil tambah data!');
    }

    public function update(Request $request)
    {
        $id = $request->editItemId;
        $requestData = $request->only([
            'target',
            'unit',
            'formula_target',
            'abs_target',
            'jeketro',
            'ngroto',
            'trisari',
            'saban',
            'mlilir',
            'ginggangtani',
            'gelapan',
            'penadaran',
            'other',
            'achievements'
        ]);

        unset($requestData['editItemId']);

        $data = LaporanKinerja::find($id);
    
        if ($data) {
            foreach ($requestData as $key => $value) {
                if ($value !== null) {
                    $data->{$key} = $value;
                }
            }
    
            $data->save();
        }

        $indicator = IndicatorController::read_by_id($data->indicator_id);
        
        if ($request->indicator && $request->indicator !== $indicator->name) {

            IndicatorController::update($request->indicator, $data->indicator_id);
        }
            
        return back()->with('success', 'Berhasil update data!');
    }

    public function delete(Request $request)
    {
        
        LaporanKinerja::destroy($request->deleteItemId);

        return back()->with('success', 'Berhasil hapus data!');
    }
}
