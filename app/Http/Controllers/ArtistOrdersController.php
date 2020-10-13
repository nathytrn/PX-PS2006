<?php

namespace App\Http\Controllers;

//use App\Http\Middleware\Artist;
use App\Order;
use App\Artist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;


class ArtistOrdersController extends Controller
{
    //
    public function update(Order $order)
    {    
        
        $order->update(request(['stage','note','title','date','time','description','note']));
        
        return redirect('/home');;
    }

    public function store(Artist $artist){
       // $attributes= request()->validate(
       //     ['description' =>'required', 
        //    'date' => 'required',
        //    'time' => 'required'    
       // ]);

       // $artist->addOrder($attributes);

       $order = Order::create([
           'artist_id' => $artist->id,
           'user_id' => Auth::user()->id,
           'title' => request('title'),
           'description' => request('description'),
           'date' => request('date'),
           'time' => request('time')
            
       ]) ;

       //Mail::to($order->artist->email)->send(new OrderCreated($order) );



        return back();

    }

    public function show()
    {

        //$orders = \App\Order::all();

        //return view('handleArtist2', compact('orders'));

        $requests = \App\Order::where('artist_id', auth()->user()->artist_id)->get();

        return view('ArtistOrderPage')->with(['requests' => $requests]);

        //return view('handleArtist2', compact('artist'));
    }

    public function showAdmin()
    {

        //$orders = \App\Order::all();

        //return view('handleArtist2', compact('orders'));

        $requests = \App\Order::all();

        return view('handleAdmin2')->with(['requests' => $requests]);

        //return view('handleArtist2', compact('artist'));
    }

}
