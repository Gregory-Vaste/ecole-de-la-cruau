<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

//controler for log user in application and distribe role
class LoginController extends Controller
{
    use Authenticatable;

    public function __construct()
    {
        $this->middleware("guest")->except("logout");
    }

    public function login(Request $request) {
        $inputVal = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $inputVal['email'], 'password' => $inputVal['password']]){
            if(auth()->user()->is_admin == 1) {
                return redirect()->route('admin.route');
            }elseif(auth()->user()->is_licencier == 2) {
                return redirect()->route('licencier.route');
            }elseif(auth()->user()->is_adherent == 3) {
                return redirect()->route('adherent.route');
            }elseif(auth()->user()->is_superAdmin == 4) {
                return redirect()->route('superAdmin.route');
            }else {
                return redirect()->route('home');
            }
        }else {
            return redirect()->route('login')
                ->with('error', 'Email Or Password are false.');
        }

    }

}
