<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskAssignmentController extends Controller
{
    public function update_modules()
    {
        $modules = DB::select('select * from modules');
        return view('manager.assigntasks')->with('modules', $modules);
    }

    //sets the selected module and loads the list of submodules respectively
    public function set_selected_module(Request $request)
    {
        $selected_module = $request->module;

        //Loading the list of submodules pertaining to the selected module
        $submodules_list = DB::select('select submodule_id, submodule_name, start_date, int_end_date, stat_end_date  from submodules where module_id = (select module_id from modules where module_name = ? ) ', [$selected_module]);
        return view('manager.selectsubmodule', ['selected_module' => $selected_module, 'submodules_list' => $submodules_list]);
    }

    public function store_dates(Request $request)
    {   

        $validated_data = $request->validate([
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after:start_date'],
            'statutory_end_date' => ['required', 'date', 'after:end_date']
        ]);
        
        //stores dates and fetches the list of steps for the selected submodule
        $selected_submodule = $request->submodule;

        //fetching steps here
        $submodule_steps = DB::select('select task_list_name from task_list where submodule_id = (select submodule_id from submodules where submodule_name = ? ) ', [$selected_submodule]);
        
        //inserting the dates here
        $insert_dates = DB::update('update submodules set start_date = ?, int_end_date = ?, stat_end_date = ? where submodule_name = ?',
        [
            $validated_data['start_date'], $validated_data['end_date'], $validated_data['statutory_end_date'], $selected_submodule
        ]);

        if($insert_dates) return view('manager.selectsteps', ['selected_submodule' => $selected_submodule, 'submodule_steps' => $submodule_steps]);

    }
}
