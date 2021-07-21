<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //create a new controller instance
    public function __construct()
    {
        $this->middleware('auth');
    }

    //show the application dashboard
    public function index()
    {
        return view('index');
    }

    public function handleAdmin()
    {
        return view('handleAdmin');
    }

    public function handleLicencier()
    {
        return view('dashboard');
    }
    public function handleAdherent()
    {
        return view('dashboard');
    }
    public function handleSuperAdmin()
    {
        return view('handleSuperAdmin');
    }
    
}
