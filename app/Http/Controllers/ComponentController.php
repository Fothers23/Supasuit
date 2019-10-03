<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;
use App\Cosplay;

class ComponentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $cosplay = Cosplay::findOrFail($id);

        return view('components.create', compact('cosplay'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cosplay $cosplay)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'shop' => 'required'
        ]);
        
        $component = new Component([
            'name' => $request->get('name'),
            'type' => $request->get('type'),
            'price' => $request->get('price'),
            'shop' => $request->get('shop'),
            'cosplay_id' => $request->get('id')
        ]);
        
        $component->save();

        return redirect()->route('component.create', $cosplay->id)->with('success', 'Data added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
