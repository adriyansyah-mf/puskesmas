<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reschedule;
use App\Http\Controllers\ProgramController;

class RescheduleController extends Controller
{
    public function index($prog)
    {

        $data = Reschedule::join('programs', 'reschedules.program_id', '=', 'programs.id')
        ->where('programs.name', $prog)
        ->select('reschedules.*')
        ->orderBy('reschedules.date', 'asc')
        ->get();

        return view('jadwal/reschedule', [
            "title" => "$prog",
            "path" => "laporan_kinerja",
            "data" => $data
        ]);
    }

    public function add(Request $request, $prog,)
    {
        $id_program = ProgramController::get_id_by_name($prog);

        Reschedule::create([
            'program_id' => $id_program,
            'date' => $request->date,
            'info_reschedule' => $request->info_reschedule,
            'target' => $request->target,
            'evaluation' => $request->evaluation,
            'follow_up' => $request->follow_up,
            'information' => $request->information,
        ]);

        $direct = "reschedule/{$prog}";
        return redirect($direct)->withSuccess('Berhasil tambah data!');
    }

    public function update(Request $request)
    {
        $id = $request->editItemId;
        $requestData = $request->only([
            'program_id',
            'date',
            'info_reschedule',
            'target',
            'evaluation',
            'follow_up',
            'information'
        ]);

        unset($requestData['editItemId']);

        $data = Reschedule::find($id);
    
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

    public function delete(Request $request)
    {
        
        Reschedule::destroy($request->deleteItemId);

        return back()->with('success', 'Berhasil hapus data!');
    }
}
