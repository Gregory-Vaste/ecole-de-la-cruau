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
            "is_admin",
            "is_superAdmin",
            "is_adherent",
            "is_licencier",
            
           
        ]);
        // dd($request->all());
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
            "is_admin",
            "is_superAdmin",
            "is_adherent",
            "is_licencier",
        ]);

        $user->update($request->all());

        return 
            redirect()->route('index.user')
                ->with('success', 'User update successfully');

    }
    public function show(Request $request){
        $user = User::find(1);
        return view('user/show',compact('user'));

    }
    //destroy user
    public function destroy($id)
    {
        $user = User::find($id);
      $user->delete();

       return redirect()->route('index.user')
                       ->with('success','user deleted successfully');
    }
    
}
