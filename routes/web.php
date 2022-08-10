<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('mail', function () {
   
    $email = [
        'title' => 'Mail from Online Web Tutor',
        'body' => 'Test mail sent by Laravel 9 using SMTP.'
    ];
   
    Mail::to('henovar12@gmail.com')->send(new \App\Mail\CreateProjectMail($email));
   
    dd("Email is Sent, please check your inbox.");

});