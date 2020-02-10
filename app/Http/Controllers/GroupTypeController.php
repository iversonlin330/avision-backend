<?php

namespace App\Http\Controllers;

use App\Type;
use App\GroupType;
use Illuminate\Http\Request;

class GroupTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$group_types = GroupType::orderBy('order')->get();
		return view('group_types.index',compact('group_types'));
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
		if(array_key_exists('order',$data)){
			foreach($data['order'] as $index => $template_id){
				GroupType::find($template_id)->update(['order' => $index+1]);
			}
		}else{
			$data['banner'] = $request->file('banner')->store('group_types');
			$data['picture'] = $request->file('picture')->store('group_types');
			$data['order'] = GroupType::all()->max('order') + 1;
			GroupType::create($data);

		}
		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(GroupType $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupType $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$data = $request->all();
		unset($data["_method"]);
		if(array_key_exists('picture',$data)){
			$data['picture'] = $request->file('picture')->store('group_types');
		}
        GroupType::where("id",$id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupType  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupType $type)
    {
        //
        $type->delete();
        return back();
    }
}
