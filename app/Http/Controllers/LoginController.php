<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Model\User;

//controler for log user in application and distribe role
class LoginController extends Controller
{
    use Authenticatable;

     public function is_admin(){
         if(auth()->user()->is_admin == true){
             return view('admin');
         }
     }
     public function is_adherent(){
         if(auth()->user()->is_adherent == true){
             return view('dashboard');
         }
     }
     public function is_licencier(){
         if(auth()->user()->is_licencier == true){
             return view('licencier');
         }
     }
     public function is_superAdmin(){
         if(auth()->user()->is_superAdmin == true){
             return view('superAdmin');
         }
     }
}
