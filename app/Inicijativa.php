<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicijativa extends Model
{
     protected $fillable = [
        'imePrezime', 
        'nazivPrivrednogSubjekta',
        'adresa',
        'email',
        'nazivProcedure',
        'nazivZakona',
        'nazivClana',
        'primedbe',
        'predlogIzmene',
        'prilog',
    ];

}
