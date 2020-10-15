<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function handleAdmin()
    {
        $requests = \App\Order::all();
        $users = \App\User::all();
        $events = \App\Event::all();
        $artists = \App\Artist::all();

        return view('handleAdmin')->with(['requests' => $requests,'users' => $users,'events' => $events, 'artists' => $artists]);
    } 

    public function handleAdminOrder(Order $order){
        return view('handleAdminOrder', compact('order'));



    }

    public function handleArtistOrder(Order $order){
        return view('handleArtistOrder', compact('order'));


    }


    public function updateArtist(User $user){
        
        $user->artist_id = request()->artist_id;
        $user->update(request(['is_artist'])); 
        

        $requests = \App\Order::all();
        $users = \App\User::all();
        $events = \App\Event::all();
        $artists = \App\Artist::all();
        return view('handleAdmin')->with(['requests' => $requests,'users' => $users,'events' => $events, 'artists' => $artists]);

    }

    public function handleArtist()
    {   
        
        $artist = \App\Artist::where('id', auth()->user()->artist_id)->first();
        $orders = \App\Order::where('artist_id', auth()->user()->artist_id)->get();
        $events = \App\Event::all();
        
        //dd($requests);

        //$requests=\App\Artist::where('id',auth()->user()->artist_id);

        return view('handleArtist')->with(['artist' => $artist,'orders' => $orders, 'events'=> $events]);

        
        
    
    } 
}
