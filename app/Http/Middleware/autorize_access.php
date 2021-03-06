<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class autorize_access
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
        if(!(auth()->user()->is_admin || auth()->user()->is_superAdmin )){
            abort(403);
        }
        return $next($request);
    }
}
