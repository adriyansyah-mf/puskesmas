<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\ProgramController;
use App\Models\Evaluasi;

class EvaluasiController extends Controller
{

    public function index($prog)
    {

        $now = Carbon::now();

        $filter_month = MonthController::listing_month();
        $month = MonthController::get_name_by_month($now->month);

        $data = Evaluasi::join('months', 'evaluasis.month_id', '=', 'months.id')
        ->join('programs', 'evaluasis.program_id', '=', 'programs.id')
        ->join('years', 'evaluasis.year_id', '=', 'years.id')
        ->where('months.month', $now->month)
        ->where('years.year', $now->year)
        ->where('programs.name', $prog)
        ->select('evaluasis.*')
        ->get();

        return view('evaluasi/evaluasi_kinerja', [
            "title" => "$prog",
            "path" => "evaluasi_kinerja",
            "filter_month" => $filter_month,
            "month" => $month[0],
            "year" => $now->year,
            "data" => $data
        ]);
    }

    public function filter(Request $request, $prog)
    {
        $filter_month = MonthController::listing_month();
        $month = MonthController::get_name_by_month($request->month);

        $data = Evaluasi::join('months', 'evaluasis.month_id', '=', 'months.id')
        ->join('programs', 'evaluasis.program_id', '=', 'programs.id')
        ->join('years', 'evaluasis.year_id', '=', 'years.id')
        ->where('months.month', $request->month)
        ->where('years.year', $request->year)
        ->where('programs.name', $prog)
        ->select('evaluasis.*')
        ->get();

        return view('evaluasi/evaluasi_kinerja', [
            "title" => "$prog",
            "path" => "evaluasi_kinerja",
            "filter_month" => $filter_month,
            "month" => $month[0],
            "year" => $request->year,
            "data" => $data
        ]);
    }

    public function add(Request $request, $prog, $year, $month)
    {

        $id_program = ProgramController::get_id_by_name($prog);
        $id_year = YearController::reate_or_create($year);
        $id_month = MonthController::get_id_by_name($month);

        Evaluasi::create([
            'program_id' => $id_program,
            'year_id' => $id_year,
            'month_id' => $id_month,
            'indicator' => $request->indicator,
            'unit' => $request->unit,
            'target_puskesmas' => $request->target_puskesmas,
            'target' => $request->target,
            'achievement' => $request->achievement,
            'cumulative' => $request->cumulative,
            'problem' => $request->problem,
            'rtl' => $request->rtl,
            'tl' => $request->tl,
            'person_responsible' => $request->person_responsible,
            'monitoring' => $request->monitoring,
            'evaluasi' => $request->evaluasi,
        ]);

        $direct = "/eval/{$prog}";
        return redirect($direct)->withSuccess('Berhasil tambah data!');
    }

    public function update(Request $request, $prog, $id)
    {
        $requestData = $request->only([
            'indicator',
            'unit',
            'target_puskesmas',
            'target',
            'achievement',
            'cumulative',
            'problem',
            'rtl',
            'tl',
            'person_responsible',
            'monitoring',
            'evaluasi',
        ]);

        $evaluasi = Evaluasi::find($id);
    
        if ($evaluasi) {
            foreach ($requestData as $key => $value) {
                if ($value !== null) {
                    $evaluasi->{$key} = $value;
                }
            }
    
            $evaluasi->save();
        }
        return redirect("/eval/{$prog}")->withSuccess('Berhasil update data!');
    }
}

