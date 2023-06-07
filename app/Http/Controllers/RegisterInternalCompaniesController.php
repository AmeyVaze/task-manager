<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterInternalCompaniesController extends Controller
{
    public function store(Request $request)
    {
        //Validating the request before storing the details in the database
        $is_validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'type_of_org' => ['required', 'string'],
            'pan' => ['required', 'alpha_num', 'unique:internal_companies,PAN', 'size:10'],
            'tan' => ['nullable', 'sometimes', 'alpha_num', 'unique:internal_companies,TAN', 'size:15'],
            'gstin' => ['nullable', 'sometimes', 'alpha_num', 'unique:internal_companies,GSTIN', 'size:15'],
            'registered_address' => ['required', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:255'],
            'cp_name' => ['required', 'string', 'max:100'],
            'cp_phone' => ['required', 'digits_between:10,15', 'unique:internal_companies,cp_phone'],
            'cp_email' => ['required', 'email', 'unique:internal_companies,cp_email', 'max:100']
        ]);

        //STORING THE FORM DATA INTO THE DATABASE
        //if TAN is not provided 
        if($is_validated['tan'] == null)
        {
            $query = DB::insert('insert into internal_companies (company_name, type_of_org, PAN, GSTIN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['company_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['gstin'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-internal-companies')->with('success', 'Internal company REGISTERED SUCCESSFULLY!');

            else return redirect('/register-internal-companies')->with('failure', 'Internal company NOT REGISTERED, please RETRY after some time!');
        }

        //if GSTIN is not provided
        elseif ($is_validated['gstin'] == null) 
        {
            $query = DB::insert('insert into internal_companies (company_name, type_of_org, PAN, TAN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['company_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['tan'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-internal-companies')->with('success', 'Internal company REGISTERED SUCCESSFULLY!');

            else return redirect('/register-internal-companies')->with('failure', 'Internal company NOT REGISTERED, please RETRY after some time!');
        }

        //if both TAN and GSTIN are not provided
        elseif ($is_validated['tan'] == null && $is_validated['gstin'] == null)
        {
            $query = DB::insert('insert into internal_companies (company_name, type_of_org, PAN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['company_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-internal-companies')->with('success', 'Internal company REGISTERED SUCCESSFULLY!');

            else return redirect('/register-internal-companies')->with('failure', 'Internal company NOT REGISTERED, please RETRY after some time!');
        }

        //if both TAN and GSTIN along with all other fields are provided (briefly means if all the data is present)
        else
        {
            $query = DB::insert('insert into internal_companies (company_name, type_of_org, PAN, TAN, GSTIN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [
                $is_validated['company_name'], $is_validated['type_of_org'], $is_validated['pan'], $is_validated['tan'], $is_validated['gstin'], $is_validated['registered_address'], $is_validated['billing_address'], $is_validated['cp_name'], $is_validated['cp_phone'], $is_validated['cp_email']
            ]);

            if($query) return redirect('/register-internal-companies')->with('success', 'Internal company REGISTERED SUCCESSFULLY!');

            else return redirect('/register-internal-companies')->with('failure', 'Internal company NOT REGISTERED, please RETRY after some time!');
        }
    }


    public function index()
    {
        $internal_companies = DB::table('internal_companies')->select('company_id', 'company_name', 'type_of_org', 'PAN', 'TAN', 'GSTIN', 'registered_address', 'billing_address', 'cp_name', 'cp_phone', 'cp_email', 'is_active')->get();
        return view('admin.internalcompanylist')->with('internal_companies', $internal_companies);
    }

    public function show_internal_company_details($id)
    {
        $int_comp_details = DB::select('select * from internal_companies where company_id = ?', [$id]);
        return view('admin.editinternalcompaniesform', ['int_comp_details' => $int_comp_details]);
    }

    public function update_internal_company_details(Request $request, $id)
    {
        $company_name = $request->company_name;
        $type_of_org = $request->type_of_org;
        $PAN = $request->pan;
        $TAN = $request->tan;
        $GSTIN = $request->gstin;
        $registered_address = $request->registered_address;
        $billing_address = $request->billing_address;
        $cp_name = $request->cp_name;
        $cp_phone = $request->cp_phone;
        $cp_email = $request->cp_email;

        $is_validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'type_of_org' => ['required', 'string'],
            'pan' => ['required', 'alpha_num', 'unique:internal_companies,PAN', 'size:10'],
            'tan' => ['nullable', 'sometimes', 'alpha_num', 'unique:internal_companies,TAN', 'size:15'],
            'gstin' => ['nullable', 'sometimes', 'alpha_num', 'unique:internal_companies,GSTIN', 'size:15'],
            'registered_address' => ['required', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:255'],
            'cp_name' => ['required', 'string', 'max:100'],
            'cp_phone' => ['required', 'digits_between:10,15', 'unique:internal_companies,cp_phone'],
            'cp_email' => ['required', 'email', 'unique:internal_companies,cp_email', 'max:100']
        ]);

        //if TAN is not provided
        if ($TAN == null) 
        {
            $query = DB::update('update internal_companies set company_name = ?, type_of_org = ?, PAN = ?, GSTIN = ?, registered_address = ?, billing_address = ?, cp_name = ?, cp_phone = ?, cp_email = ? where company_id = ?' ,
            [$company_name, $type_of_org, $PAN, $GSTIN, $registered_address, $billing_address, $cp_name, $cp_phone, $cp_email, $id]);

            if($query) return redirect('/internal-company-list')->with('update-successfull', 'Internal Company details UPDATED SUCCESSFULLY!');
            else return redirect('/internal-company-list')->with('update-failed', 'Internal Company details NOT UPDATED, please RETRY after some time!');
        } 

        //if GSTIN is not provided
        elseif($GSTIN == null)
        {
            $query = DB::update('update internal_companies set company_name = ?, type_of_org = ?, PAN = ?, TAN = ?, registered_address = ?, billing_address = ?, cp_name = ?, cp_phone = ?, cp_email = ? where company_id = ?' ,
            [$company_name, $type_of_org, $PAN, $TAN, $registered_address, $billing_address, $cp_name, $cp_phone, $cp_email, $id]);

            if($query) return redirect('/internal-company-list')->with('update-successfull', 'Internal Company details UPDATED SUCCESSFULLY!');
            else return redirect('/internal-company-list')->with('update-failed', 'Internal Company details NOT UPDATED, please RETRY after some time!');
        }

        //if both TAN and GSTIN are not provided
        elseif($TAN == null && $GSTIN == null)
        {
            $query = DB::update('update internal_companies set company_name = ?, type_of_org = ?, PAN = ?, registered_address = ?, billing_address = ?, cp_name = ?, cp_phone = ?, cp_email = ? where company_id = ?' ,
            [$company_name, $type_of_org, $PAN, $registered_address, $billing_address, $cp_name, $cp_phone, $cp_email, $id]);

            if($query) return redirect('/internal-company-list')->with('update-successfull', 'Internal Company details UPDATED SUCCESSFULLY!');
            else return redirect('/internal-company-list')->with('update-failed', 'Internal Company details NOT UPDATED, please RETRY after some time!');
        }

        //if all details are provided
        else 
        {
            $query = DB::update('update internal_companies set company_name = ?, type_of_org = ?, PAN = ?, TAN = ?, GSTIN = ?, registered_address = ?, billing_address = ?, cp_name = ?, cp_phone = ?, cp_email = ? where company_id = ?' ,
            [$company_name, $type_of_org, $PAN, $TAN, $GSTIN, $registered_address, $billing_address, $cp_name, $cp_phone, $cp_email, $id]);

            if($query) return redirect('/internal-company-list')->with('update-successfull', 'Internal Company details UPDATED SUCCESSFULLY!');
            else return redirect('/internal-company-list')->with('update-failed', 'Internal Company details NOT UPDATED, please RETRY after some time!');
        }
    }

    public function deactivate_internal_company($id)
    {
        $query = DB::update('update internal_companies set is_active = 0 where company_id = ?', [$id]);
        if($query) return redirect('/internal-company-list')->with('deactivate-successfull', 'Internal Company DEACTIVATED SUCCESSFULLY!');
        else return redirect('/internal-company-list')->with('deactivate-failed', 'Internal Company DEACTIVATION FAILED, please retry after some time!');
    }

    public function activate_internal_company($id)
    {
        $query = DB::update('update internal_companies set is_active = 1 where company_id = ?', [$id]);
        if($query) return redirect('/internal-company-list')->with('activate-successfull', 'Internal Company ACTIVATED SUCCESSFULLY!');
        else return redirect('/internal-company-list')->with('activate-failed', 'Internal Company ACTIVATION FAILED, please retry after some time!');
    }
}