<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminOrArtist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(auth()->user()->is_admin == 1 || auth()->user()->is_artist == 1){
                return $next($request);
            }
        }
   
        return redirect('home')->with('error',"Only artist or admin can access!");
    
    
    }
    
}
