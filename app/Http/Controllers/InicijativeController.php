<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InicijativaJunk;
use App\Inicijativa;
use App\Http\Requests;
use Mail;
use View;
class InicijativeController extends Controller
{
    public function getPropisView() {
      return view('inicijative.inicijativePropisi');
    }

    public function getProceduraView() {
     return view('inicijative.inicijativeProcedure'); 
    }

	public function postInicijativa(Request $request) {
		  // $this->validate($request, [
    //     'imePrezime' => 'required|max:50|alpha',
    //     'adresa' => 'required',
    //     'email' => 'required',
    //     'adresa' => 'required',
    //     'adresa' => 'required',
    //     'adresa' => 'required',
    //     'adresa' => 'required',
    //     'adresa' => 'required',
    //     'adresa' => 'required',
    // ]);

		  // $inicijativaJunk = new InicijativaJunk;
		  // $inicijativaJunk->create($request-all());
      global $request;
		  $inicijativaJunk = InicijativaJunk::create($request->all());

       $data = array(
        'tip' => $request->input('tip'),
    );

    Mail::send('mail', $data , function ($message) {
        global $request;
        $message->from('motasevic994@gmail.com');
          $subject='Unesena je nova inicijativa';
          if($request->input('tip') == 'propis')
            $subject = 'Unesena je nova inicijativa za propis';
          if ($request->input('tip') == 'procedura') {
            $subject = 'Unesena je nova inicijativa za proceduru';
          }

        $message->to('motasevic994@hotmail.com')->subject($subject);

    });
          // $inicijativaJunk->tip = $request->input('tip');

		  return redirect()->back()->with('info','Uspesno ste poslali inicativu');
	}
    // mora da se dorade uslovi ako se filtrira za jos nesto osim za tip inicijative
    public function getInicijative(Request $request) {

    if(empty($request->all())) {
        $inicijative =  InicijativaJunk::all();
    }
    else {
        $array = $request->all();
        $a = $array['tip'];
        $inicijative= InicijativaJunk::where('tip','=', $a)->get();
    }
      $data = $inicijative->toArray();
      return  view('mail', compact('data'));
      
    }
    
    // mora da se dorade uslovi ako se filtrira za jos nesto osim za tip inicijative
    public function getPotvrdjeneInicijative() {
      if(empty($request->all())) {
        $inicijative =  Inicijativa::all();
    }
    else {
        $array = $request->all();
        $a = $array['tip'];
        $inicijative= Inicijativa::where('tip','=', $a)->get();
    }
      
      return $inicijative;
    }

    public function transferInicijativa(InicijativaJunk $id) {
       
      Inicijativa::create($id->toArray());
      $id->delete();
      
      return redirect()->back();
    }

    public function deleteInicijativa(InicijativaJunk $id) {
      $id->delete();
      return redirect()->back();
    }

}
