<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    // return all user 
    public function index(User $user){

        $users = User::all();
        
        return view('user/index',compact('users'));
    }
    // return view for creat user
    public function create()
    {
        return view('user/create');
    }

    
    //Created a new user for admin or super admin 
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "firstname" => 'required',
            "adress" => 'required',
            "zipCode" => 'required',
            "email" => 'required',
            "password" => 'required',
            "is_admin" => 'required',
            "is_superAdmin" => 'required',
            "is_adherent" => 'required',
            "is_licencier" => 'required',
            
           
        ]);
        User::create($request->all());

        return 
            redirect()->route('index.user')
                ->with('success', 'User created successfully');

    }
    //form for edit a user 
    public function edit(User $user)
    {
        return view('user/edit', compact('user'));
    }

    //updating a new user for admin or super admin 
    public function update(Request $request, User $user)
    {
        $request->validate([
            "name" => 'required',
            "firstname" => 'required',
            "adress" => 'required',
            "zipCode" => 'required',
            "email" => 'required',
            "password" => 'required',
            "is_admin" => 'required',
            "is_superAdmin" => 'required',
            "is_adherent" => 'required',
            "is_licencier" => 'required',
            
           
        ]);
        $user->update ($request->all());

        return 
            redirect()->route('index.user')
                ->with('success', 'User update successfully');

    }
    //destroy user
    public function destroy(User $user)
    {
      $user->delete();

       return redirect()->route('index.user')
                       ->with('success','user deleted successfully');
    }
    
}
