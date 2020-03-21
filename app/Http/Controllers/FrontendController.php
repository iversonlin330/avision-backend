<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Download;
use App\Faq;
use App\GroupType;
use App\Product;
use App\Filter;
use App\Logo;
use App\Group;
use App\ProductSpec;
use App\Software;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

		$group_types = GroupType::all();
		$types = Type::all();

		$type_map = [];
		foreach( $types as $type ){
			$type_map[$type->type][] = $type->id;
		}

		return view('frontends.products',compact('products','filters','group_types','type_map'));
    }

	public function getProductDetail($id)
    {
        //
		$product = Product::find($id);
		$logo1s = Logo::where('type',1)->whereIn('id',$product->spec)->get();
		$logo2s = Logo::where('type',2)->whereIn('id',$product->bonus)->get();
		$logo3s = Logo::where('type',3)->whereIn('id',$product->cert)->get();
		$type = $product->type->type;
		$types = Type::where('type',$type)->get();
		$groups = Group::where('type',$type)->orderBy('order')->get();
		$product_specs = $product->product_specs->pluck('value','spec_id')->toArray();

        $softwares = Software::whereIn("id", $product->software)->get();
        $faqs = Faq::whereIn("id", $product->faq)->get();
        $accessories = Accessory::whereIn("id", $product->accessory)->get();

		return view('frontends.product-detail',compact('product','groups','product_specs', 'softwares', 'faqs', 'accessories','logo1s','logo2s','logo3s'));
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
        $group_types = GroupType::all();
        $all_products = Product::all();
        if($data){
            if(array_key_exists("product_id",$data)){
                $products = Product::where("id",$data["product_id"])->get();
            }elseif (array_key_exists("product_title",$data)){
                $products = Product::where("title","LIKE","%".$data["product_title"]."%")->get();
            }else{
                $products = Product::all();
            }
        }else {
            $products = Product::all();
        }

        return view("frontends.download",compact("products","group_types","all_products"));
    }

    public function getFaq(Request $request){
        $data = $request->all();
        if($data){
			$faqs = Faq::where("title","LIKE","%".$data["search"]."%")
				->where("title","LIKE","%".$data["search"]."%")
				->get()->pluck("id")->toArray();
            $products = Product::all();
			foreach($products as $k => $v){
				if(array_intersect($faqs,$products[$k]->faq)){

				}else{
					unset($products[$k]);
				}
			}
        }else {
            $products = Product::all();
        }

        return view("frontends.faq",compact("products","data"));
    }

	public function getSoftwareDownload($id){
		$file = Software::find($id);
		return Storage::download($file->file, $file->title . "." . explode(".",$file->file)[1]);
	}

	public function getDownloadDownload($id){
		$file = Download::find($id);
		return Storage::download($file->file, $file->title . "." . explode(".",$file->file)[1]);
	}

	public function getAjaxProduct(Request $request){
		$data = $request->all();
		$product = Product::find($data['id']);
		$src = asset('storage/'.$product->picture);
		$title = $product->title;
		return response()->json(['id' => $product->id,'type'=>$product->type->type,'src' => $src, 'title' => $title]);
	}

}
