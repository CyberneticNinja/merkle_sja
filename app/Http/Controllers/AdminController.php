<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


Class AdminController extends Controller
{
    /*
    loginValidation(Request $request) 
    returns empty array if there are no errors
    else an array of validation errors based on the request
    */
    protected function loginValidation(Request $request)
    {
        $errors = [];
        if(empty(trim($request->input('username'))))
        {
            $errors[] = 'Username cannot be blank';
        }
        if(empty(trim($request->input('password'))))
        {
            $errors[] = 'password cannot be blank';
        }
        return $errors;
    }

    //displays the registered users
    public function home()
    {
        if(isset($_COOKIE['username']))
        {
            $users = DB::select('select * from users order by created desc');
            return view('report_format',['users' => $users]);
        }
        else
        {
            return redirect('/');
        }
    }

    // store($request) takes is a request and validates for errors before storing the request
    // in the db
    public function store(Request $request)
    {
        $errors = $this->loginValidation($request);
        if(!empty($errors))
        {
            return view('errors',['errors' => $errors]);
        }
        else
        {
            $user = DB::select('select * from admin where username = ?', [$request->input('username')]);

	    if(empty($user))
	    {
		 return view('errors',['errors' => array('Username and Password combination cannot be found')]);
	    }
            else if(password_verify($request->input('password'), $user[0]->password))
            {
                setcookie('username', Crypt::encrypt($request->input('username')), time() + (86400 * 30), "/"); // 86400 = 1 day
                return redirect('/');
            }
            else
            {
                return view('errors',['errors' => array('Username and Password combination cannot be found')]);
            }
        }      
    }

    /*
    shows the login form
    */
    public function show()
    {
        // echo 'we are in AdminController function show()';
        return view('login_form');
    }
	//logout
	public function logout()
	{
    	
    	setcookie('username',"",1,'/');
    	unset($_COOKIE['username']);
    	return redirect('/');
	}
    
}
