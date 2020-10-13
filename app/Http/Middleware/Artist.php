<?php

namespace App\Http\Middleware;

use Closure;

class Artist
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
        if(auth()->user()->is_artist == 1){
            return $next($request);
        }
   
        return redirect('home')->with('error',"Only verify artist can access!");
    }
}
