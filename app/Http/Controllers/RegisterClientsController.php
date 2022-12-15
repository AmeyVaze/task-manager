<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterClientsController extends Controller
{
    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), 
        [

            //Performing the validations on each input field incoming throught the request
            'client_name' => ['required', 'string', 'max:100'],
            'type_of_org' => ['required', 'string'],
            'pan' => ['required', 'string', 'alpha_num', 'size:10', 'unique:clients'],
            'registered_address' => ['required', 'string', 'max:255'],
            'billing_address' => ['required', 'string', 'max:255'],
            'cp_name' => ['required', 'string', 'max:100'],
            'cp_phone' => ['required', 'string', 'min:10', 'max:15', 'unique:clients'],
            'cp_email' => ['required', 'string', 'email', 'unique:clients'],

            //non mandatory fields
            'tan' => ['required','string', 'alpha_num', 'size:10', 'unique:clients'],
            'gstin' => ['required', 'string', 'alpha_num', 'size:15', 'unique:clients'],
            
        ],
        [
            // ERROR MESSAGES TO BE SHOWN IF THE INPUT FIELDS ARE NOT PROPERLY VALIDATED

            //client_name
            'client_name.required' => 'Client name is required',
            'client_name.max' => 'Client name should not be more than 100 characters',

            //type_of_org
            'type_of_org.required' => 'Select the type of organization from the dropdown',

            //pan
            'pan.required' => 'PAN is required',
            'pan.size' => 'PAN should have only 10 characters',
            'pan.unique' => 'PAN already exists in our records',

            //tan
            'tan.required' => 'TAN is required',
            'tan.size' => 'TAN should have only 10 characters',
            'tan.unique' => 'TAN already exists in our records',

            //gstin
            'gstin.required' => 'GSTIN is required',
            'gstin.size' => 'GSTIN should have only 15 characters',
            'gstin.unique' => 'GSTIN already exists in our records',

            //registered_address
            'registered_address.required' => 'Registered address is required',
            'registered_addtess.max' => 'Registered address is too long',

            //billing address
            'billing_address.required' => 'Billing address is required',
            'billing_addtess.max' => 'Billing address is too long',

            //cp_name
            'cp_name.required' => 'Contact person name is required',
            'cp_name.max' => 'Contact person name is too long',

            //cp_phone
            'cp_phone.required' => 'Contact person phone no. is required',
            'cp_phone.min' => 'Contact person phone no.  should have a minimum of 10 characters',
            'cp_phone.max' => 'Contact person phone no. should have a maximum of 15 characters',
            'cp_phone.unique' => 'Contact person phone no. already exists in our records',

            //cp_email
            'cp_email.required' => 'Contact person email id is required',
            'cp_email.email' => 'Contact person email id is not in the correct format',
            'cp_email.unique' => 'Contact person email id already exists in our records',

        ]);

        if($validate->fails())
        {
            return back()->withErrors($validate->errors())->withInput();
        }

        $client_name = $request->client_name;
        $type_of_org = $request->type_of_org;
        $PAN = $request->pan;
        $TAN = $request->tan;
        $GSTIN = $request->gstin;
        $registered_address = $request->registered_address;
        $billing_address = $request->billing_address;
        $cp_name = $request->cp_name;
        $cp_phone = $request->cp_phone;
        $cp_email = $request->cp_email;

        $query = DB::insert('insert into clients (client_name, type_of_org, PAN, TAN, GSTIN, registered_address, billing_address, cp_name, cp_phone, cp_email) values (?,?,?,?,?,?,?,?,?,?)', [$client_name, $type_of_org, $PAN, $TAN, $GSTIN, $registered_address, $billing_address, $cp_name, $cp_phone, $cp_email]);


        if($query)
        {
            return redirect('/register-clients')->with('success', 'Client registered successfully!');
        }

        else
        {
            return redirect('/register-clients')->with('failure', 'Client not registered, please retry after some time!');
        }
    }

    public function index()
    {
        $clients = DB::table('clients')->select('client_id','client_name', 'type_of_org', 'PAN', 'TAN', 'GSTIN', 'registered_address', 'billing_address', 'cp_name', 'cp_phone', 'cp_email')->get();
        return view('admin.clientlist')->with('clients',$clients);
    }
}
