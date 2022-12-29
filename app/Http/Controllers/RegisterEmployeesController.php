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

        $query = DB::insert('insert into users (first_name, last_name, email, phone_number, role, password) 
        values (?, ?, ?, ?, ? ,?)', [$first_name, $last_name, $email, $phone_no, $role, $password]);

        if($query) {
            return redirect('/register-employees')
            ->with('success', 'Employee REGISTERED successfully!');
        }

        else {
            return redirect('/register-employees')
            ->with('failure', 'Employee NOT REGISTERED, please retry after some time!');
        }
    }

    public function index()
    {
        $employees = DB::table('users')->select('user_id','first_name', 'last_name', 'email', 'phone_number', 'role', 'is_active')->get();
        return view('admin.employeelist')->with('employees',$employees);
    }

    public function show_employee_details($id)
    {
        $employee_details = DB::select('select user_id, first_name, last_name, email, phone_number, role from users where user_id = ?', [$id]);
        return view('admin.editemployeeform', ['employee_details' => $employee_details]);
    }

    public function update_employee_details(Request $request, $id)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $phone_no = $request->phone_no;
        $role = $request->role;

        $query = DB::update('update users set first_name = ?, last_name = ?, email = ?, phone_number = ?, role = ? where user_id = ?', 
        [$first_name, $last_name, $email, $phone_no, $role, $id]);

        if($query){
            return redirect('/employee-list')
            ->with('update-successfull', 'Employee details UPDATED successfully!');
        }

        else {
            return redirect('/employee-list')
            ->with('update-failed', 'Employee details NOT UPDATED, please retry after some time!');
        }
    }

    public function deactivate_employee($id)
    {
        $query = DB::update('update users set is_active = 0 where user_id = ?', [$id]);
        if($query) return redirect('/employee-list')->with('deactivate-successfull', 'Employee DEACTIVATED successfully!');
        else return redirect('/employee-list')->with('deactivate-failed', 'Employee DEACTIVATION FAILED, please retry after some time!');
    }

    public function activate_employee($id)
    {
        $query = DB::update('update users set is_active = 1 where user_id = ?', [$id]);
        if($query) return redirect('/employee-list')->with('activate-successfull', 'Employee ACTIVATED successfully!');
        else return redirect('/employee-list')->with('activate-failed', 'Employee ACTIVATION FAILED, please retry after some time!');
    }    
}
