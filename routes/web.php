<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/Nayana1',function(){
    $fullname1 = 'Nayana P Vaity';
    return view("Nayana1",["abc" => $fullname1]);
});

Route::get('/Nayana2',function(){
    $abc = "Nayana2 pandurang vaity";
    return view("Nayana2",compact('abc'));
});