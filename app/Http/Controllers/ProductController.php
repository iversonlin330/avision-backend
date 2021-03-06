<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Faq;
use App\Product;
use App\Filter;
use App\Logo;
use App\Group;
use App\ProductSpec;
use App\Software;
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
		//$type_ids = Type::where('type',$type)->get()->pluck('id')->toArray();
		$products = Product::where('type_id',$type)->orderBy('order')->get();
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
		$is_type = $data['type'];
		//$types = Type::where('type',$type)->get();
		$types = Type::all();
		$filters = Filter::all();
		$logo1s = Logo::where('type',1)->get();
		$logo2s = Logo::where('type',2)->get();
		$logo3s = Logo::where('type',3)->get();

		return view('products.create',compact('filters','logo1s','logo2s','logo3s','types','is_type'));
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
			if(!array_key_exists('spec',$data)){
				$data['spec'] = [];
			}
			if(!array_key_exists('software',$data)){
				$data['software'] = [];
			}
			if(!array_key_exists('cert',$data)){
				$data['cert'] = [];
			}
			if(!array_key_exists('filter',$data)){
				$data['filter'] = [];
			}
            if(!array_key_exists('accessory',$data)){
                $data['accessory'] = [];
            }
            if(!array_key_exists('faq',$data)){
                $data['faq'] = [];
            }
            if(!array_key_exists('bonus',$data)){
                $data['bonus'] = [];
            }

			$data['picture'] = $request->file('picture')->store('products');
			$data['order'] = Product::all()->max('order') + 1;
			Product::create($data);
			$type = Type::find($data['type_id']);
			return redirect('products?type='.$data['type_id']);
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
		//$types = Type::where('type',$type)->get();
		$types = Type::all();
		$groups = Group::where('type',$type)->orderBy('order')->get();
		$product_specs = $product->product_specs->pluck('value','spec_id')->toArray();
		//dd($product_specs);
        $softwares = Software::all();
        $accessories = Accessory::where('group_type_id', $type)->get();
        $faqs = Faq::all();
		return view('products.create',compact('product','filters','logo1s','logo2s','logo3s',
            'groups','product_specs','types','softwares','accessories','faqs'));
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
		/*
		if(!array_key_exists('spec',$data)){
				$data['spec'] = [];
			}
			if(!array_key_exists('software',$data)){
				$data['software'] = [];
			}
			if(!array_key_exists('cert',$data)){
				$data['cert'] = [];
			}
			if(!array_key_exists('filter',$data)){
				$data['filter'] = [];
			}
            if(!array_key_exists('accessory',$data)){
                $data['accessory'] = [];
            }
            if(!array_key_exists('faq',$data)){
                $data['faq'] = [];
            }
            if(!array_key_exists('bonus',$data)){
                $data['bonus'] = [];
            }
			*/
		$product->update($data);
        //$product->fill($data)->save();
        $type = Type::find($product->type_id);
		return redirect('products?type='.$product->type_id);
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
	
	public function uploadFile(Request $request){
		$postFile = 'upload';
		$allowedPrefix = ['jpg','png','doc','docx','xls','xlsx','zip','ppt','pptx','rar','pdf'];
		//检查文件是否上传成功
		if(!$request->hasFile($postFile) || !$request->file($postFile)->isValid()){
			return $this->CKEditorUploadResponse(0,'文件上傳失败');
		}
		$extension = $request->file($postFile)->extension();
		$size = $request->file($postFile)->getClientSize();
		$filename = $request->file($postFile)->getClientOriginalName();
		//检查后缀名
		//Log::info('extension',[$filename=>$extension]);
		if(!in_array($extension, $allowedPrefix)){
			return $this->CKEditorUploadResponse(0,'文件類型不合法');
		}
		//检查大小
		//Log::info('size',[$filename=>$size]);
		if($size > 10*1024*1024){
			return $this->CKEditorUploadResponse(0,'文件大小超過限制');
		}
		//保存文件
		$path = '/storage/'.$request->file($postFile)->store('uploadImages');
		return $this->CKEditorUploadResponse(1,'',$filename,$path);
	}
	
	private function CKEditorUploadResponse($uploaded,$error='',$filename='',$url=''){
		return [
			"uploaded" => $uploaded,
			"fileName" => $filename,
			"url" => $url,
			"error" => [
				"message" => $error
			]
		];
	}
	
	public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            //$request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            //$url = asset('images/'.$fileName);
			//$request->file('upload')->store('products');
			$url = asset('/storage/'.$request->file('upload')->store('products'));			
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}
