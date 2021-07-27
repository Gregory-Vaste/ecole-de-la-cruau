<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        
        return view('partner/index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description_partner' => 'required',
            'image' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        $input = $request->all();

        if($image = $request->file('image'))
        {
            $image = $request->file('image');
            $imagePath = 'image/';
           $imageTime = date('Dmy') . "." . $image->getClientOriginalExtension();
           $image->move($imagePath, $imageTime);
           $input['image'] = "$imageTime";

        }
        Partner::create($request->all());

        return redirect()->route('partners.index')
            ->with('sucess','Partner created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('partner/show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partner/edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name' => 'required',
            'description_partner' => 'required',
        ]);

        $input = $request->all();

        if($image = $request->file('image'))
        {
            $image = $request->file('image');
            $imagePath = 'image/';
           $imageTime = date('Dmy') . "." . $image->getClientOriginalExtension();
           $image->move($imagePath, $imageTime);
           $input['image'] = "$imageTime";

        }else{
            unset($input['image']);
        }
        $partner->update($input);

        return redirect()->route('partners.index')
            ->with('success', 'Partner update success.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();

        return redirect()->route('partners.index')

                        ->with('success','Partner deleted successfully');
    }
}
