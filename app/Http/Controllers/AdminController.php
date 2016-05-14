<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller
{

	// public function __construct() {
	// 	$this->middleware('auth');
	// }

    public function deleteKorisnik(User $id) {
    	$id->delete();
    }

    public function napraviGlavnog() {
      
	    User::create([
	            'name' => 'Administrator',
	            'email' => 'inicijative@rsjp.gov.rs',
	            'password' => bcrypt('Adinrsjp11000'),
	            'admin' => 1,
	    ]);
    }
}
