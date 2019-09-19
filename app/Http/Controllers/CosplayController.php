<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cosplay;

class CosplayController extends Controller
{
    public function index(Request $request)
    {
        $cosplays = Cosplay::all(); // Retrieves all Cosplay instances from the database
        return view('cosplays.index', compact('cosplays'));
    }

    public function show(Request $request, Cosplay $cosplay)
    {
        return view('cosplays.show', compact('cosplay'));
    }

    public function create(Request $request)
    {
        return view('cosplays.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));

        $image = $file->getFilename().'.'.$extension;

        $cosplay = new Cosplay([
            'image' => $image,
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price')
        ]);
        
        $cosplay->save();

        return redirect('/cosplay/create')->with('success', 'Data added');
        
    }

    public function edit(Request $request, Cosplay $cosplay)
    {
        return view('cosplays.edit', compact('cosplay'));
    }

    public function update(Request $request, $cosplay)
    {
    
    }

    public function destroy(Request $request, $cosplay)
    {
    
    }


}
