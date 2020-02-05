<?php

namespace App\Http\Controllers;

use App\ProductSpec;
use Illuminate\Http\Request;

class ProductSpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
		ProductSpec::where('product_id',$data['product_id'])->delete();
		foreach($data['spec'] as $key =>$val){
			if(!$val){
				$val = "";
			}
			ProductSpec::create([
				'product_id' => $data['product_id'],
				'spec_id' => $key,
				'value' => $val,
			]);
		}
		return back()->with('tab', 'T3');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductSpec  $productSpec
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSpec $productSpec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductSpec  $productSpec
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSpec $productSpec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductSpec  $productSpec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductSpec $productSpec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductSpec  $productSpec
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSpec $productSpec)
    {
        //
    }
}
