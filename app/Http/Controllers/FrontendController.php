<?php

namespace App\Http\Controllers;

use App\GroupType;
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
		    $data = $request->all();
            $products = Product::where('type_id', $data['type_id'])->get();
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

    public function getCompare(Request $request){
        $data = $request->all();
        $product_ids = $data['product_id'];
        $products = Product::whereIn("id",$product_ids)->get();

        $type = $products->first()->type->type;

        $groups = Group::where('type',$type)->orderBy('order')->get();
        //$product_specs = $product->product_specs->pluck('value','spec_id')->toArray();

        return view("frontends.compare",compact("products","groups"));
    }

    public function getGroupType(Request $request){
        $data = $request->all();
        $group_type_id = $data['group_type_id'];
        $group_type = GroupType::where('id',$group_type_id)->orderBy('order')->first();

        return view("frontends.group_type",compact("group_type"));
    }

    public function getDownload(Request $request){
        $data = $request->all();
        if($data){
            $products = Product::all();
        }else {
            $products = Product::all();
        }

        return view("frontends.download",compact("products"));
    }

    public function getFaq(Request $request){
        $data = $request->all();
        if($data){
            $products = Product::all();
        }else {
            $products = Product::all();
        }

        return view("frontends.faq",compact("products"));
    }

}
