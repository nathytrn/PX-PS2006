<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $guarded = [];


    public function artist(){
        return $this->belongsTo(Artist::class);
    }
}
