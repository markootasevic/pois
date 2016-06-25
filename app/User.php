<?php

namespace App;
use App\InicijativaJunk;
use App\Inicijativa;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function inicijative() {
        return $this->hasMany('App\Inicijativa');
    }

    public function inicijativeJunk() {
        return $this->hasMany('App\InicijativaJunk');
    }
}
