<?php

namespace App\Http\Controllers;

use App\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
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
        $group_type_id = $data['group_type_id'];
        $accessories = Accessory::where("group_type_id",$group_type_id)->orderBy('order')->get();
        $type_text = "配件";
        return view("accessories.index",compact("accessories","type_text","group_type_id"));
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

		$data = $request->all();
		if(array_key_exists('order',$data)){
			foreach($data['order'] as $index => $template_id){
				Accessory::find($template_id)->update(['order' => $index+1]);
			}
		}else{
			$data['file'] = $request->file('file')->store('accessories');
			$data['order'] = Accessory::all()->max('order') + 1;
			Accessory::create($data);

		}
		return back()->with('tab', 'T5');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function show(Accessory $accessory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accessory $accessory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessory $accessory)
    {
        //
		$data = $request->all();
		if(array_key_exists('file',$data)){
			$data['file'] = $request->file('file')->store('accessories');
		}
		//$data['file'] = $request->file('file')->store('accessories');
		$accessory->update($data);
		return back();
		//return back()->with('tab', 'T5');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accessory  $accessory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        //
		$accessory->delete();
		return back()->with('tab', 'T5');
    }
}
