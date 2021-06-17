<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/', function(){ 
    return view('home');
});
$router->get('/test', function(){ 
    if(isset($_COOKIE['username']))
    {
        dd($_COOKIE);
    }
});
$router->get('/register', 'RegistrationController@index');
$router->post('/register','RegistrationController@store');
$router->get('/login','AdminController@show');
$router->post('/login','AdminController@store');
$router->get('/adminHome','AdminController@home');

// $router->post('/form',function(Request $request) {
//     dd($request->input('first_name'));
// });
