<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
            'image' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);
        
        $cosplay = new Cosplay([
            'image' => $this->storeImage($request),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'user_id' => $request->get('user')
        ]);
        
        $cosplay->save();

        return redirect('/cosplay/create')->with('success', 'Data added'); 
    }

    public function edit($id)
    {
        $cosplay = Cosplay::findOrFail($id);
        return view('cosplays.edit', compact('cosplay'));
    }

    public function update(Request $request, Cosplay $cosplay)
    {
        
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);

        if($request->hasFile('image'))
        {
            $cosplay->image = $this->storeImage($request);
        }

        $cosplay->name = $request->name;
        $cosplay->description = $request->description;
        $cosplay->price = $request->price;

        $cosplay->update();

        return redirect()->route('cosplay.index')
                        ->with('success','Cosplay updated successfully');
        
    }

    public function destroy(Cosplay $cosplay)
    {
        $cosplay->delete();
  
        return redirect()->route('cosplay.index')
                        ->with('success','Cosplay deleted successfully');
    }

    public function storeImage(Request $request)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));

        return $image = $file->getFilename().'.'.$extension;
    }

}
