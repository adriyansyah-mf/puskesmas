<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ProgramValue;
use App\Http\Controllers\IndicatorController; 
use App\Http\Controllers\YearController;


class ProgramValueController extends Controller
{
    public function get_value($program, $id_indicator, $year)
    {
        $query = ProgramValue::join('years', 'program_values.year_id', '=', 'years.id')
            ->where('years.year', $year)
            ->where('program_values.indicator_id', $id_indicator)
            ->select('program_values.*')
            ->get();
        if ($query->isEmpty()) {
            return false;
        }
        return  $query[0];
    }

    public function index($slug)
    {

        $indicator = IndicatorController::getIndicatorsByProgramName($slug);
        $now = Carbon::now()->year;

        if(!$indicator){
            return view('spm/index', [
                "title" => "SPM BULANAN",
                "path" => "SPM",
                "filter_indicator" => false,
                "year" => $now,
                "indicator" => false,
                "data" => false
            ]);
        }
        
       
        $data = $this->get_value($slug, $indicator[0]->id, $now);

        return view('spm/index', [
            "title" => "SPM BULANAN",
            "path" => $slug,
            "filter_indicator" => $indicator,
            "indicator" => $indicator[0],
            "year" => $now,
            "data" => $data
        ]);
    }

    public function edit($program, $year, $id_indicator)
    {
        {
            $filter_indicator = IndicatorController::getIndicatorsByProgramName($program);
            $data_indicator = IndicatorController::read_by_id($id_indicator);
            $data = $this->get_value($program, $id_indicator, $year);
            return view('spm/edit_value', [
                "title" => "SPM BULANAN",
                "path" => "SPM",
                "year" => $year,
                "filter_indicator" => $filter_indicator,
                "indicator" => $data_indicator,
                "data" => $data
            ]);
        }
    }

    public function filter($program, $year, $id_indicator)
    {
        {
            $filter_indicator = IndicatorController::getIndicatorsByProgramName($program);
            $data_indicator = IndicatorController::read_by_id($id_indicator);
            $data = $this->get_value($program, $id_indicator, $year);
            
            return view('spm/index', [
                "title" => "SPM BULANAN",
                "path" => "SPM",
                "year" => $year,
                "filter_indicator" => $filter_indicator,
                "indicator" => $data_indicator,
                "data" => $data
            ]);
        }
    }

    public function read_by_id($id)
    {
        $query = ProgramValue::where('program_values.id', $id)
            ->select('program_values.*')
            ->get();
        if ($query->isEmpty()) {
            return false;
        }
        return  $query[0];
    }

    public function update(Request $request, $program, $id, $id_indicator)
    {
        $id_year = YearController::reate_or_create($request->year);
        $values = [
            "year_id" => $id_year,
            "indicator_id" => intval($id_indicator),
            "target" => intval($request->target),
            "precentation_target" => intval($request->precentation_target),
            "absolute01" => intval($request->absolute01),
            "target01" => intval($request->target01),
            "absolute02" => intval($request->absolute02),
            "target02" => intval($request->target02),
            "absolute03" => intval($request->absolute03),
            "target03" => intval($request->target03),
            "absolute04" => intval($request->absolute04),
            "target04" => intval($request->target04),
            "absolute05" => intval($request->absolute05),
            "target05" => intval($request->target05),
            "absolute06" => intval($request->absolute06),
            "target06" => intval($request->target06),
            "absolute07" => intval($request->absolute07),
            "target07" => intval($request->target07),
            "absolute08" => intval($request->absolute08),
            "target08" => intval($request->target08),
            "absolute09" => intval($request->absolute09),
            "target09" => intval($request->target09),
            "absolute10" => intval($request->absolute10),
            "target10" => intval($request->target10),
            "absolute11" => intval($request->absolute11),
            "target11" => intval($request->target11),
            "absolute12" => intval($request->absolute12),
            "target12" => intval($request->target12),
        ];
        IndicatorController::update($request->indicator, $id_indicator);

        $data = $this->read_by_id($id);
        if ($data){
            ProgramValue::where('id', $id)->update($values);     
        }
        else{
            ProgramValue::create($values);
        }

        $direct = "/spm/filter/{$program}/{$request->year}/{$id_indicator}";
        return redirect($direct)->withSuccess('Berhasil update data user!');        
        
    }

}

