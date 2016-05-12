<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InicijativaJunk;

use App\Http\Requests;

class InicijativeController extends Controller
{
    public function getPropisView() {
      return view('#');
    }

    public function getProceduraView() {
     return view('#'); 
    }

	public function postInicijativa(Request $request) {
		  $this->validate($request, [
        'imePrezime' => 'required|max:50|alpha',
        'adresa' => 'required',
        'email' => 'required',
        'adresa' => 'required',
        'adresa' => 'required',
        'adresa' => 'required',
        'adresa' => 'required',
        'adresa' => 'required',
        'adresa' => 'required',
    ]);

		  // $inicijativaJunk = new InicijativaJunk;
		  // $inicijativaJunk->create($request-all());

		  $inicijativaJunk = InicijativaJunk::create($request->all);

		  return redirect()->back()->with('info','Uspesno ste poslali inicativu');
	}

}
