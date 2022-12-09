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
}
