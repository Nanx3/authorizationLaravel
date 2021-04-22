<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifiedAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo '<h3>' . date("m.d.y") . '</h3>';
        //$_REQUEST['age']
       /* if ($request->age >= 18) {
          return $next($request);    
        } else {
            return redirect('/');
        }*/
        
        return $next($request); 
        
    }
}
