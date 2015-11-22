<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table='persons';

    protected $fillable=[
        'user',
        'email',
        'phoneNumber',
        'personalNumber'
    ];
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
