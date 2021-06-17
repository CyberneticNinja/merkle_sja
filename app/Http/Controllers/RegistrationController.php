<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Class RegistrationController extends Controller
{
    //validating the user inputs
    protected function RegistrationVaildation(Request $request)
    {
        $errors = [];

        if(empty(trim($request->input('first_name'))))
        {
            $errors[] = 'First Name cannot be blank';
        }

        if(empty(trim($request->input('last_name'))))
        {
            $errors[] = 'Last Name cannot be blank';
        }

        if(empty(trim($request->input('address1'))))
        {
            $errors[] = 'Address 1 cannot be blank';
        }

        if(empty(trim($request->input('city'))))
        {
            $errors[] = 'City cannot be blank';
        }

        if(empty(trim($request->input('zip'))))
        {
            $errors[] = 'Zip cannot be blank';
        }
        elseif(!is_numeric(trim($request->input('zip'))))
        {
            $errors[] = 'Zip codes must be numeric';
        }
        elseif(strlen(trim($request->input('zip'))) != 5)
        {
            if(strlen(trim($request->input('zip'))) != 9)
            {
                $errors[] = 'Zip codes can only be 5 or 9 digits';
            }
        }
        return $errors;
    }

    //shows the registration form
    public function index()
    {
        return view('registration_form');
    }

    //store registration 
    public function store(Request $request)
    {
        $errors = $this->RegistrationVaildation($request);
        if(!empty($errors))
        {
            return view('errors',['errors' => $errors]);
        }
        else
        {
            DB::insert('insert into users (first_name,last_name,address1,address2,city,state,zip) 
            values (?,?,?,?,?,?,?)', 
            [
                trim(addslashes($request->input('first_name'))),
                trim(addslashes($request->input('last_name'))),
                trim(addslashes($request->input('address1'))),
                trim(addslashes($request->input('address2'))),
                trim(addslashes($request->input('city'))),
                trim($request->input('state')),
                trim($request->input('zip')),
            ]);

            return view('register_success');
        }
    }

    //confirmation
    // public function confirmation(Request $request)
    // {
    //     return view('registration_confirmation',
    //     [
    //         'first_name' => $request->input('first_name'),
    //         'last_name' => $request->input('last_name'),
    //         'address1' => $request->input('address1'),
    //         'address2' => $request->input('address2'),
    //         'city' => $request->input('city'),
    //         'state' => $request->input('state'),
    //         'zip' => $request->input('zip'),            
    //     ]);
    // }

    public function show(Request $request)
    {
        // return view('greeting', ['name' => 'James']);
        // echo 'we are in RegistrationController function';
    }
} 