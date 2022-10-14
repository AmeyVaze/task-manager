<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//--------------MANAGER ROUTES-----------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/assign-tasks', function () {
    return view('manager.assigntasks');
});

Route::get('/select-submodule', function () {
    return view('manager.selectsubmodule');
});

Route::get('/select-date', function () {
    return view('manager.selectdate');
});

//ADMIN LTE DASHBOARD
Route::get('/manager-dashboard', function () {
    return view('manager.managerdashboard');
});

Route::get('/select-steps', function () {
    return view('manager.selectsteps');
});

Route::get('/select-employee', function () {
    return view('manager.selectemployee');
});

Route::get('/task-assign-successfull', function () {
    return view('manager.taskassignsuccessfull');
});

Route::get('/assigned-tasks-manager', function () {
    return view('manager.assignedtasksmanager');
});

Route::get('/inprogress-tasks-manager', function () {
    return view('manager.inprogresstasksmanager');
});

Route::get('/completed-tasks-manager', function () {
    return view('manager.completedtasksmanager');
});

Route::get('/select-date', function () {
    return view('manager.selectdate');
});

//-----------------------------------------------------


Route::get('/task-completion-successfull', function () {
    return view('employee.taskcompletionsuccessfull');
});

Route::get('/employee-dashboard', function () {
    return view('employee.employeedashboard');
});

Route::get('/report-issue', function () {
    return view('employee.reportissue');
});


Route::get('/task-list', function () {
    return view('employee.tasklist');
});



Route::get('/assigned-tasks-employee', function () {
    return view('employee.assignedtasksemployee');
});


//------------------------------------------------------


Route::get('/front-desk-dashboard', function () {
    return view('front-desk.frontdeskdashboard');
});

Route::get('/create-invoice', function () {
    return view('front-desk.createinvoice');
});

Route::get('/pending-for-invoice', function () {
    return view('front-desk.pendingforinvoice');
});

Route::get('/invoiced-clients', function () {
    return view('front-desk.invoicedclients');
});



Route::get('/admin-dashboard', function () {
    return view('admin.admindashboard');
});



Route::get('/register-employees', function () {
    return view('admin.registeremployees');
});

Route::get('/employee-list', function () {
    return view('admin.employeelist');
});


Route::get('/register-clients', function () {
    return view('admin.registerclients');
});

Route::get('/register-internal-companies', function () {
    return view('admin.registerinternalcompanies');
});

Route::get('/client-list', function () {
    return view('admin.clientlist');
});


Route::get('/employee-roles-table', function () {
    return view('admin.employeerolestable');
});


//AUTH ROUTES
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});
