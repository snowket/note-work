<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classin extends Model
{
    protected $table='classes';
    protected $fillable=['name','power'];

    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
