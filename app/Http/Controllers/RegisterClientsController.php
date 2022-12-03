<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RegisterClientsController extends Controller
{
    public function validator(array $data)
    {
        return Validator::make($data, [
            //write the code for validating the fields in the register clients form
        ]);
    }

    public function store(Request $request)
    {
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
            return redirect('/register-clients')->with('status','Client details have been inserted successfully!');
        }

        else
        {
            return redirect('/register-clients')->with('status','Client details not entered, please retry!');
        }
    }

    public function index()
    {
        $clients = DB::table('clients')->select('client_name', 'type_of_org', 'PAN', 'TAN', 'GSTIN', 'registered_address', 'billing_address', 'cp_name', 'cp_phone', 'cp_phone')->get();
        return view('admin.clientlist', compact('clients', $clients));
    }
}
