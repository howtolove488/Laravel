<?php
use App\Mail\WelcomeToTamtay;
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

Route::get('/', function () {
    return view('welcome');
    
    // $email = new WelcomeToTamtay(new App\User(['name'=>'Peter']));    
    // Mail::to('hello@example.com')->send($email);

    // Mail::to('hello@example.com')->send(new WelcomeToTamtay);
});
