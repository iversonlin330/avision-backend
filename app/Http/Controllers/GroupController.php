<?php

namespace App\Http\Controllers;

use App\Group;
use App\Spec;
use Illuminate\Http\Request;

class GroupController extends Controller
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
		$groups = Group::where('type',$type)->get();
		return view('groups.index',compact('groups','type'));
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
				Group::find($template_id)->update(['order' => $index+1]);
			}
			return back();
		}else{
			//dd($data);
			$data['order'] = Group::where('type',$data['type'])->max('order') + 1;
			Group::Create($data);
		}
		return back();
		//return redirect('groups/?type='.$data['type']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
		$data = $request->all();
		$group->update($data);
		return back();
		//return redirect('groups/?type='.$group->type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
		$group->delete();
		return back();
    }
}
