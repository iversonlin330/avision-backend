<?php

namespace App\Http\Controllers;

use App\Product;
use App\Filter;
use App\Logo;
use App\Group;
use App\ProductSpec;
use App\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
		$data = $request->all();
		$type = $data['type'];
		$type_ids = Type::where('type',$type)->get()->pluck('id')->toArray();
		$products = Product::whereIn('type_id',$type_ids)->orderBy('order')->get();
		return view('products.index',compact('products','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
		$data = $request->all();
		$type = $data['type'];
		$types = Type::where('type',$type)->get();
		$filters = Filter::all();
		$logo1s = Logo::where('type',1)->get();
		$logo2s = Logo::where('type',2)->get();
		$logo3s = Logo::where('type',3)->get();
		
		return view('products.create',compact('filters','logo1s','logo2s','logo3s','types'));
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
		if(array_key_exists('order',$data)){
			foreach($data['order'] as $index => $template_id){
				Product::find($template_id)->update(['order' => $index+1]);
			}
			return back();
		}else{
			$data['picture'] = $request->file('picture')->store('products');
			$data['order'] = Product::all()->max('order') + 1;
			Product::create($data);
			$type = Type::find($data['type_id']);
			return redirect('products?type='.$type->type);
		}
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
		$type = $product->type->type;
		$types = Type::where('type',$type)->get();
		$groups = Group::where('type',$type)->orderBy('order')->get();
		$product_specs = $product->product_specs->pluck('value','spec_id')->toArray();
		//dd($product_specs);
		return view('products.create',compact('product','filters','logo1s','logo2s','logo3s','groups','product_specs','types'));
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
		if(array_key_exists('picture',$data)){
			$data['picture'] = $request->file('picture')->store('products');
		}
		$product->update($data);
		$type = Type::find($data['type_id']);
		return redirect('products?type='.$type->type);
		//return redirect('products');
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
