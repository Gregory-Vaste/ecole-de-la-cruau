<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if(auth()->user()->is_admin == true){

            return response()->view('handleAdmin');
        }elseif(auth()->user()->is_adherent == true){
            return response()->view('handleAdherent');
        }elseif(auth()->user()->is_licencier == true){
            return response()->view('handleLicencier');
        }elseif(auth()->user()->is_superAdmin == true){
            return response()->view('handleSuperAdmin');
        }
        return $next($request);
    }
}
