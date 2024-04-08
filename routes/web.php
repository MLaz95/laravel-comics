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

    
    $comics = config("db.comics");
    $headLinks = config("db.headLinks");

    // this variable is not working for some reason
    // the dd shows the array correctly
    // but when the variable is called on the welcome page it reads a unidentified
    // $blueLinks = config("db.blueLinks");
    // dd($blueLinks);

    // compact('blueLinks') removed because of error
    return view('welcome', compact('comics'), compact('headLinks'),);
});
