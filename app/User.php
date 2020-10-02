<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'tipo', 'status','password'
    ];

    public function contatos() {
        return $this->hasMany(Contato::class);
    }

    public function servicoViatura(){
        return $this->hasMany('App\ServicoViatura','usuario_id');
    }

    public function motoristas(){
        return $this->hasMany(Motorista::class);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
