<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth(); // url('/register')

//ADMIN
Route::delete('/obrisiKorisnika/{id}', 'AdminController@deleteKorisnik');

Route::get('/napraviGlavnog', 'AdminController@napraviGlavnog');

// Inicijative: prikaz potvrdjene nepotvrdjene
Route::get('inicijativa/sve', 'InicijativeController@getInicijative');

Route::get('inicijativa/svePotvrdjene', 'InicijativeController@getPotvrdjeneInicijative');

Route::get('/home', 'HomeController@index');

//Dodavanje inicijativa
Route::get('/inicijativa/propis','InicijativeController@getPropisView');

Route::get('/inicijativa/procedura','InicijativeController@getProceduraView');

Route::post('/inicijativa','InicijativeController@postInicijativa');

