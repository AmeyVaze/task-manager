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

    public function set_selected_module(Request $request)
    {
        $selected_module = $request->module;

        //Loading the list of submodules pertaining to the selected module
        $submodules_list = DB::select('select submodule_name from submodules where module_id = (select module_id from modules where module_name = ? ) ', [$selected_module]);
        return view('manager.selectsubmodule', ['selected_module' => $selected_module, 'submodules_list' => $submodules_list]);
    }

    public function store_dates(Request $request)
    {      
        $selected_submodule = $request->submodule;
        $submodule_steps = DB::select('select task_list_name from task_list where submodule_id = (select submodule_id from submodules where submodule_name = ? ) ', [$selected_submodule]);
        return view('manager.selectsteps', ['selected_submodule' => $selected_submodule, 'submodule_steps' => $submodule_steps]);

    }
}
