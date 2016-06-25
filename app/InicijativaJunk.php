<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class InicijativaJunk extends Model
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
        'tip',
    ];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
