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
    return view('greeting');
});

Route::get('/addPubliFormButton', function(){
    return view('addPubliForm');
});

Route::get('/InscriptionFormButton', function(){
    return view('InscriptionForm');
});

Route::get('/connexionFormButton', function(){
    return view('connexionForm');
});