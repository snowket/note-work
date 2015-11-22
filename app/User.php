<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;


    protected $fillable=[
        'username',
        'password',
        'email'
    ];
    public function Post()
    {
        return $this->hasMany('App\Post','user_id');
    }

    public function Classin()
    {
        return $this->hasOne('App\Classin','user_id');
    }

    public function Person()
    {
        return $this->Hasone('App\Person','user_id');
    }
}
