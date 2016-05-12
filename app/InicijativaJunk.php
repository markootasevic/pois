<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inicijativeJunk extends Model
{
    protected $table = 'inicijativeJunk';
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
