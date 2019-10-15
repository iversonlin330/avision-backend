<?php

namespace App\Http\Controllers;

use App\Product;
use App\Filter;
use App\Logo;
use App\Group;
use App\ProductSpec;
use App\Type;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts(Request $request)
    {
        //
		if($request->all()){
			
		}else{
			$products = Product::all();
		}
		$filters = Filter::all();
		
		return view('frontends.products',compact('products','filters'));
    }
	
	public function getProductDetail($id)
    {
        //
		$product = Product::find($id);
		$logo1s = Logo::where('type',1)->get();
		$logo2s = Logo::where('type',2)->get();
		$logo3s = Logo::where('type',3)->get();
		$type = $product->type->type;
		$types = Type::where('type',$type)->get();
		$groups = Group::where('type',$type)->orderBy('order')->get();
		$product_specs = $product->product_specs->pluck('value','spec_id')->toArray();
		
		return view('frontends.product-detail',compact('product','groups','product_specs'));
    }
	
}
