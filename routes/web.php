     <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterClientsController;
use App\Http\Controllers\TaskAssignmentController;
use App\Http\Controllers\RegisterEmployeesController;
use App\Http\Controllers\AdminDashboardCountsController;
use App\Http\Controllers\RegisterInternalCompaniesController;
use Illuminate\Support\Facades\Auth;

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

Route::get(
    '/assign-tasks', 
    [TaskAssignmentController::class, 
    'update_modules']
);

Route::get(
    '/set_selected_module',
    [TaskAssignmentController::class,
    'set_selected_module']
);

Route::post(
    '/store_dates',
    [TaskAssignmentController::class,
    'store_dates']
);

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

//--------------ADMIN ROUTES--------------

Route::get('/register-employees', function () {
    return view('admin.registeremployees');
});

Route::post(
    '/store_employee_details', 
    [RegisterEmployeesController::class, 
    'store']
);

Route::get(
    '/employee-list', 
    [RegisterEmployeesController::class, 
    'index']
);

Route::get(
    'show_employee/{id}',
    [RegisterEmployeesController::class,
    'show_employee_details']
);

Route::post(
    'update_employee_details/{id}',
    [RegisterEmployeesController::class,
    'update_employee_details']
);

Route::get(
    '/activate_employee/{id}',
    [RegisterEmployeesController::class,
    'activate_employee']
);

Route::get(
    '/deactivate_employee/{id}',
    [RegisterEmployeesController::class,
    'deactivate_employee']
);

Route::get(
    '/show_client_details/{id}',
    [RegisterClientsController::class,
    'show_client_details']
);

Route::post(
    '/update_client_details/{id}',
    [RegisterClientsController::class,
    'update_client_details']
);

Route::get(
    '/deactivate_client/{id}',
    [RegisterClientsController::class,
    'deactivate_client']
);

Route::get(
    '/activate_client/{id}',
    [RegisterClientsController::class,
    'activate_client']
);

Route::get('/register-clients', function () {
    return view('admin.registerclients');
});

Route::post(
    '/store_client_details', 
    [RegisterClientsController::class, 
    'store']
);

Route::get(
    '/admin-dashboard', 
    [AdminDashboardCountsController::class, 
    'count']
);

Route::post(
    '/store_internal_company_details',
    [RegisterInternalCompaniesController::class,
    'store']
);

Route::post(
    '/update_internal_company_details/{id}',
    [RegisterInternalCompaniesController::class,
    'update_internal_company_details']
);

Route::get(
    '/activate_internal_company/{id}',
    [RegisterInternalCompaniesController::class,
    'activate_internal_company']
);

Route::get(
    '/deactivate_internal_company/{id}',
    [RegisterInternalCompaniesController::class,
    'deactivate_internal_company']
);

Route::get(
    '/internal-company-list',
    [RegisterInternalCompaniesController::class,
    'index']
);

Route::get(
    '/show_internal_company_details/{id}',
    [RegisterInternalCompaniesController::class,
    'show_internal_company_details']
);

Route::get('/register-internal-companies', function () {
    return view('admin.registerinternalcompanies');
});

Route::get(
    '/client-list', 
    [RegisterClientsController::class, 
    'index']
);


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

