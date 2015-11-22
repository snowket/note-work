<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeOrder($query)
    {
        $query->orderBy('created_at','DESC');
    }
    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
