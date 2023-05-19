<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterClientsController extends Controller
{
    public function store(Request $request)
    {

        //Validating the request before storing the details in the database
        $is_validated = $request->validate([
            'client_name' => ['required', 'string', 'max:255'],
            'type_of_org' => ['required', 'string'],
            'pan' => ['required', 'alpha_num', 'unique:clients,PAN', 'size:10'],
            'tan' => ['nullable', 'sometimes', 'alpha_num', 'unique:clients,TAN', 'size:15'],
            'gstin' => ['nullable', 'sometimes', 'alpha_num', 'unique:clients,GSTIN', 'size:15'],
            'registered_address' => ['required', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:255'],
            'cp_name' => ['required', 'string', 'max:100'],
            'cp_phone' => ['required', 'digits_between:10,15'],
            'cp_email' => ['required', 'email', 'unique:clients,cp_email', 'max:100']
        ]);

        //STORING THE FORM DATA INTO THE DATABASE
        //if TAN is not provided 
        if($is_validated['tan'] == null)
        {
            $query = DB::insert('insert into clients (client_name, type_of_org, PAN, GSTIN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['client_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['gstin'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-clients')->with('success', 'Client REGISTERED SUCCESSFULLY!');

            else return redirect('/register-clients')->with('failure', 'Client NOT REGISTERED, please RETRY after some time!');
        }

        //if GSTIN is not provided
        elseif ($is_validated['gstin'] == null) 
        {
            $query = DB::insert('insert into clients (client_name, type_of_org, PAN, TAN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['client_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['tan'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-clients')->with('success', 'Client REGISTERED SUCCESSFULLY!');

            else return redirect('/register-clients')->with('failure', 'Client NOT REGISTERED, please RETRY after some time!');
        }

        //if both TAN and GSTIN are not provided
        elseif ($is_validated['tan'] == null && $is_validated['gstin'] == null)
        {
            $query = DB::insert('insert into clients (client_name, type_of_org, PAN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['client_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-clients')->with('success', 'Client REGISTERED SUCCESSFULLY!');

            else return redirect('/register-clients')->with('failure', 'Client NOT REGISTERED, please RETRY after some time!');
        }

        //if both TAN and GSTIN along with all other fields are provided (briefly means if all the data is present)
        else
        {
            $query = DB::insert('insert into clients (client_name, type_of_org, PAN, TAN, GSTIN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['client_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['tan'], $is_validated['gstin'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-clients')->with('success', 'Client REGISTERED SUCCESSFULLY!');

            else return redirect('/register-clients')->with('failure', 'Client NOT REGISTERED, please RETRY after some time!');
        }
    }

    public function index()
    {
        $clients = DB::table('clients')->select('client_id','client_name', 'type_of_org', 'PAN', 'TAN', 'GSTIN', 'registered_address', 'billing_address', 'cp_name', 'cp_phone', 'cp_email', 'is_active')->get();
        return view('admin.clientlist')->with('clients', $clients);
    }

    public function show_client_details($id)
    {
        $client_details = DB::select('select * from clients where client_id = ?', [$id]);
        return view('admin.editclientform', ['client_details' => $client_details]);
    }

    public function update_client_details(Request $request, $id)
    {
        $is_validated = $request->validate([
            'client_name' => ['required', 'string', 'max:255'],
            'type_of_org' => ['required', 'string'],
            'pan' => ['required', 'alpha_num', 'size:10'],
            'tan' => ['nullable', 'sometimes', 'alpha_num', 'size:15'],
            'gstin' => ['nullable', 'sometimes', 'alpha_num', 'size:15'],
            'registered_address' => ['required', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:255'],
            'cp_name' => ['required', 'string', 'max:100'],
            'cp_phone' => ['required', 'digits_between:10,15'],
            'cp_email' => ['required', 'email', 'max:100']
        ]);

        $query = DB::update('update clients set client_name = ?, type_of_org = ?, PAN = ?, TAN = ?, GSTIN = ?, registered_address = ?, billing_address = ?, cp_name = ?, cp_phone = ?, cp_email = ? where client_id = ?' ,
                            [
                                $is_validated['client_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['tan'], $is_validated['gstin'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email'], $id
                            ]);

        if($query) return redirect('/client-list')->with('update-successfull', 'Client details UPDATED SUCCESSFULLY!');
        else return redirect('/client-list')->with('update-failed', 'Client details NOT UPDATED, please RETRY after some time!');
    }

    public function deactivate_client($id)
    {
        $query = DB::update('update clients set is_active = 0 where client_id = ?', [$id]);
        if($query) return redirect('/client-list')->with('deactivate-successfull', 'Client DEACTIVATED SUCCESSFULLY!');
        else return redirect('/client-list')->with('deactivate-failed', 'Client DEACTIVATION FAILED, please retry after some time!');
    }

    public function activate_client($id)
    {
        $query = DB::update('update clients set is_active = 1 where client_id = ?', [$id]);
        if($query) return redirect('/client-list')->with('activate-successfull', 'Client ACTIVATED SUCCESSFULLY!');
        else return redirect('/client-list')->with('activate-failed', 'Client ACTIVATION FAILED, please retry after some time!');
    }

}
