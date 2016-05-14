<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class MailController extends Controller
{
    public function sendemail(Request $request) {
       
       $data = array (
       	'tip' => $request->input('tip'),
       	 
       );

    Mail::send('mail', $data , function ($message) {

        $message->from('motasevic994@gmail.com');
        	if($data['tip'] == 'propis')
        		$subject = 'Unesena je nova inicijativa za propis';
        	else 
        		$subject = 'Unesena je nova inicijativa za proceduru';

        $message->to('filipned@live.com')->subject($subject);

    });

    return "Your email has been sent successfully";
    }
}
