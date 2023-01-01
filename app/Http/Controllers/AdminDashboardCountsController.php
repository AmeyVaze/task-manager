<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AdminDashboardCountsController extends Controller
{
    public function count()
    {
        //storing the counts in a multidimesional array named $data[]
        $data['registered_client_count'] = DB::select('select count(*) as client_count from clients');
        $data['registered_internal_company_count'] = DB::select('select count(*) as internal_company_count from internal_companies');
        $data['registered_employee_count'] = DB::select('select count(*) as employee_count from users');
        $data['no_of_roles'] = DB::select('select count(distinct(role)) as different_roles from users');

        //returning $data with requested column names along with the dashboard view 
        return view('admin.admindashboard', ['data' => $data]);
    }
}
