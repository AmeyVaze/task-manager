<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisterEmployeesController extends Controller
{
    public function store(Request $request) {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $phone_no = $request->phone_no;
        $role = $request->role;
        $password = Hash::make($request->password);

        $query = DB::insert('insert into users (first_name, last_name, email, phone_number, role, password) values (?, ?, ?, ?, ? ,?)', [$first_name, $last_name, $email, $phone_no, $role, $password]);

        if($query) {
            return redirect('/register-employees')->with('success', 'Employee registered successfully!');
        }

        else {
            return redirect('/register-employees')->with('failure', 'Employee not registered, please retry after some time!');
        }
    }

    public function index()
    {
        $employees = DB::table('users')->select('user_id','first_name', 'last_name', 'email', 'phone_number', 'role')->get();
        return view('admin.employeelist')->with('employees',$employees);
    }
}
