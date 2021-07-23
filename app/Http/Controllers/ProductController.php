<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::where('is_true',1)->get();

        return view('ecommerce/index',compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecommerce/create');
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
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required',
        ]);

        product::create($request->all());

        return 
            redirect()->route('product.index')->with('success', 'Product create successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $categories = Category::where('is_true',1)->get();
        $products = product::all();
        //$products = product::find(1);
        //product::random(1);
        return view('ecommerce/show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ecommerce/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product->delete();
            return redirect()->route('products.index')
                            ->with('sucess', 'post delete successfully');
    }

    public function category(Request $request)
    {
        $products = product::where('category_id', $request->id)->get();
        $categories = Category::where('is_true',1);

        return view('ecommerce/category',compact('categories','products'));
    }
}
