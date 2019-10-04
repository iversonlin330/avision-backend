<?php

namespace App\Http\Controllers;

use App\Product;
use App\Filter;
use App\Logo;
use App\Group;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$products = Product::all();
		return view('products.index',compact('products','filters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$filters = Filter::all();
		$logo1s = Logo::where('type',1)->get();
		$logo2s = Logo::where('type',2)->get();
		$logo3s = Logo::where('type',3)->get();
		return view('products.create',compact('filters','logo1s','logo2s','logo3s'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$data = $request->all();
		$data['picture'] = $request->file('picture')->store('products');
		Product::create($data);
		return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
		$filters = Filter::all();
		$logo1s = Logo::where('type',1)->get();
		$logo2s = Logo::where('type',2)->get();
		$logo3s = Logo::where('type',3)->get();
		$groups = Group::where('type',$product->type_id)->get();
		return view('products.create',compact('product','filters','logo1s','logo2s','logo3s','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
		$data = $request->all();
		$data['picture'] = $request->file('picture')->store('products');
		$product->update($data);
		return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
		$product->delete();
		return back();
    }
}
