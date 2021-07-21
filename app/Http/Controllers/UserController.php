<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit_user(){
        return view('user/editUser');
    }

    public function show_user(){

        $users = User::all();
        
        return view('user/showUser',compact('users'));
    }
    
}
