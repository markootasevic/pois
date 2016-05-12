<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicijativa extends Model
{
    protected $table = 'inicijative';
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
        'tip',
    ];

}
