<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class testMiddleware
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
        if($request->year>50)
        {
            echo "He is Old Man";
        }
        else{
            echo "He is not old Man";
        }
        return $next($request);
    }
}
