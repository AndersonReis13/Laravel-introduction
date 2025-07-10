<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/model', function () {
    $users = new \App\Models\User();

    $users->name = 'Anderson';
    $users->email = 'andersonline61@gmail.com';
    $users->password = bcrypt('senha123');


    return \App\Models\User::all();
});
