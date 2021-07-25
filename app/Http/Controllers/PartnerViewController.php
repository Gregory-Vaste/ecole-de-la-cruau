<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerViewController extends Controller
{
    public function index(){
        $partners = Partner::all(); 
        return view('partnerView/index', compact('partners'));
    }

    public function show(Request $request)
    {
        $partner = Partner::find(1);
        return view('partnerView/show', compact('partner'));
    }

    // return view for user auth
    public function indexAuth()
    {
        $partners = Partner::all();
        return view('partnerUserAuth/index', compact('partners'));
    }

    public function showAuth()
    {
        $post = Partner::find(1);
        return view('partnerUserAuth/show', compact('post'));
    }

}
