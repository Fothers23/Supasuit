<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;
use App\Cosplay;

class ComponentController extends Controller
{
    public function index()
    {
        clock()->startEvent('unique-event', "Nathan's test");
        $components = Component::with('cosplay')->paginate(1);
        clock()->endEvent('unique-event');

        return view ('components.index', compact('components'));
    }

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $component = Component::findOrFail($id);
        return view('components.edit', compact('component'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'price' => 'required|numeric',
            'shop' => 'required'
        ]);

        $component->name = $request->name;
        $component->type = $request->type;
        $component->price = $request->price;
        $component->shop = $request->shop;
        $component->cosplay->id = $request->id;

        $component->update();

        return redirect()->route('cosplay.index', 'all')
                        ->with('success','Component updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        $component->delete();
        
        return redirect()->route('cosplay.index', 'all')
                        ->with('success','Component deleted successfully');
    }
}
