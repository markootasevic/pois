<?php

namespace App;
use App\User;

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
        'prihvacena',
        'status'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function getZaposleni() {
        return User::find($this->user_id);
    }
}
