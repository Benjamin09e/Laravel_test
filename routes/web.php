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

/*
Route::get('/', function () {
    //return view('welcome');
    return "Salut Benjamin";
});
*/

Route::view('/', 'welcome');

Route::get('apropos', function(){
    return view('apropos');
});
/*

Route::get('/Services', function(){
    return view('services');
});
*/

//Racoursi pour appeller une view
Route::view('Services', 'services');


Route::get('/clients',function(){

    //affichage des paramettre en dure
    //return view('clients.index');

   // affichage dynamique
    $tab= [
        'Ben',
        'Bengy',
        'Benjamin'
    ];
    return view('clients.index',[

        'data' => $tab
    ]);
});
