<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicator;
use App\Http\Controllers\ProgramController;

class IndicatorController extends Controller
{
    public static function getIndicatorsByProgramName($program)
    {
        $indicators = Indicator::join('programs', 'indicators.program_id', '=', 'programs.id')
            ->where('programs.name', strtolower($program))
            ->select('indicators.*')
            ->get();
        if ($indicators->isEmpty()) {
            return false;
        }

        return $indicators;
    }

    public static function read_by_id($id)
    {
        $data = Indicator::where('indicators.id', $id)->select('indicators.*')->get();
        return $data[0];

    }

    
    public function store(Request $request, $slug)
    {
        $data_program = ProgramController::read_by_name($slug);
        $validateData = $request->validate([
            'name' => 'required',
        ]);

        $validateData['program_id'] = $data_program[0]->id;
        try {
            Indicator::create($validateData);
            return redirect('/spm/spm')->withSuccess('Berhasil tambah data indicator!');
        } catch (\Exception $e) {
            error_log("Exception: " . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Indicator sudah ada!']);
        }
    }

    public static function update($indicator, $id)
    {
        $data = Indicator::findOrFail($id);

        if ($indicator != $data->name) {
            $data->update([
                'name' => $indicator
            ]);
        }
        
        return $id;
    }

    public static function store_all($indicator, $program)
    {
        $data_program = ProgramController::read_by_name($program);

        $validateData['program_id'] = $data_program[0]->id;
        $data = Indicator::create([
            'program_id'=> $data_program[0]->id,
            'name' => $indicator
        ]);

        return $data->id;
    }
}
