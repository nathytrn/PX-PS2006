<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    
    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
