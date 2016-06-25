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



//ADMIN
Route::auth(); // url('/register') preko kod admin dodaje nove korsnije (ovo ide u action u formi za dodavanje)

Route::get('admin', 'AdminController@getAdminStrana');

Route::delete('/obrisiKorisnika/{id}', 'AdminController@deleteKorisnik');

Route::get('/napraviGlavnog', 'AdminController@napraviGlavnog');

// Inicijative: prikaz potvrdjene nepotvrdjene
Route::get('inicijativa/sve', 'InicijativeController@getInicijative');

Route::get('inicijativa/svePotvrdjene', 'InicijativeController@getPotvrdjeneInicijative');



Route::get('/home', 'HomeController@index');

//Dodavanje inicijativa
Route::get('/inicijativa/propis','InicijativeController@getPropisView');

Route::get('inicijativa/jedna/{inicijativaId}', [
	'uses' => 'InicijativeController@getJednuInicijativu',
	'as' => 'inicijativaPopUp'
]);

Route::get('/inicijativa/procedura','InicijativeController@getProceduraView');

Route::post('/inicijativa','InicijativeController@postInicijativa');

// RUTE ZA PRIHVATANJE ODBIJANJE I BRISANJE POJEDINACNE INICIJATIVE
//	PROSLEDITI RUTE DUGMICIMA
Route::post('inicijativa/potvrdi/{id}', 'InicijativeController@transferInicijativaPrihvacena');

Route::post('inicijativa/odbij/{id}', 'InicijativeController@transferInicijativaOdbijena');

Route::delete('inicijativa/delete/{id}', 'InicijativeController@deleteInicijativa');

//slanje email-a
Route::post('sendemail', 'MailController@sendemail');

//administrativni prikaz strana

// ovo je ruta za dodeljivanje inicijative nekom zaposlenom
Route::get('/javnoDostupne', 'InicijativeController@getJavnoDostupne');

Route::get ('file', 'InicijativeController@getFile');

//ovo je ruta za javni prikaz svih inicijativa koje su obradjenje





// RUTA ISPOD JE KONFLIKTNA SA RUTOM InicijativeController@getInicijative KOJA VRACA ISTI VIEW
// PROBLEM JE STO OVA RUTA NE SALJE POTREBNE PODATKE U VIEW 
// TAKO DA PREDLAZEM DA SE ZA VRACANJE ADMIN VIEWA KORISTI VEC GOTOVA RUTA InicijativeController@getInicijative
// Route::get('adminView', function(){
// 	return view('/adminPrikaz/administrativniPrikazInicijativa');
// });