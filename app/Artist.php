<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class);
        
    }

    public function events()
    {
        return $this->hasMany(Event::class);
        
    }

    public function images()
    {
        return $this->hasMany(Image::class);
        
    }


    public function addOrder($date,$time,$description){
        return Order::create([
            'artist_id'=>$this->id,
            'user_id'=>$this->Auth::user()->id,
            'date'=>$date,
            'time'=>$time,
            'description' => $description
        ]);
    }
}
