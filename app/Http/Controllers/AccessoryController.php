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
		$data['file'] = $request->file('file')->store('accessories');
		Accessory::create($data);
		return back();
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
		$data = $request->all();
		$data['file'] = $request->file('file')->store('accessories');
		$accessory->update($data);
		return back();
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
		return back();
    }
}
