<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
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
        $faqs = Faq::where("type",$data["type"])->get();
        $type_text = \Config::get("map.faq_type")[$data['type']];
        return view("faqs.index",compact("faqs","type","type_text"));
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
				Faq::find($template_id)->update(['order' => $index+1]);
			}
		}else{
			$data['order'] = Faq::all()->max('order') + 1;
			Faq::create($data);
		}
		return back()->with('tab', 'T6');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        //
		$data = $request->all();
		$faq->update($data);
		return back()->with('tab', 'T6');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        //
		$faq->delete();
		return back()->with('tab', 'T6');
    }
}
