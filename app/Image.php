<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $guarded = [];


    public function artist(){
        return $this->belongsTo(Artist::class);
    }

}
