<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/admin-dashboard';

    // protected $redirectTo = '/admin-dashboard';

    public function authenticated(Request $request)
    {
        if(auth()->user()->role == 'Administrator') {
            $email = $request->email;
            $name = DB::select('select first_name from users where email = ?', [$email]);
            return redirect(url('/admin-dashboard'))->with(['status' => 'You are now logged in!']);
        }

        else if(auth()->user()->role == 'Manager') {
            $email = $request->email;
            $name = DB::select('select first_name from users where email = ?', [$email]);
            return redirect(url('/manager-dashboard'))->with('status', 'You are now logged in!');
        }

        else if(auth()->user()->role == 'Employee') {
            $email = $request->email;
            $name = DB::select('select first_name from users where email = ?', [$email]);
            return redirect(url('/employee-dashboard'))->with('status', 'You are now logged in!');
        }

        else if(auth()->user()->role == 'Front Desk') {
            $email = $request->email;
            $name = DB::select('select first_name from users where email = ?', [$email]);
            return redirect(url('/front-desk-dashboard'))->with('status', 'You are now logged in!');
        }

        else {
            return redirect('/');
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout_employee(Request $request)
    {
            return redirect('/')->with('status', 'The employee has logged out!');
    }
}
