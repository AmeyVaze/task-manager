<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Admin_Add_Controller extends Controller
{
    public function store_module_name(Request $request)
    {
        $is_validated = $request->validate(['module_name' => 'unique:modules, module_name']);
        if($is_validated) {
            $query = DB::insert('insert into modules(module_name) values (?)', [$request->module_name]);
            if($query) return redirect('/add-new-module')->with('status-success-query', 'New MODULE added successfully!');
            else return redirect('/add-new-module')->with('status-failed-query', 'New MODULE was not added!');
        }
    }

    public function load_and_list()
    {
        $modules = DB::select('select module_name from modules');
        return view('admin.addnewsubmodule')->with('modules', $modules);
    }
}
