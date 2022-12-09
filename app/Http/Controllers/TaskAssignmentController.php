<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskAssignmentController extends Controller
{
    public function store(Request $request)
    {
        //storing the module selected in a variable
        $module = $request->module;

        
    }
}
