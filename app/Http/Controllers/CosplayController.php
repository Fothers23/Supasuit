<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Cosplay;

class CosplayController extends Controller
{
    // Display all cosplays in the cosplay database
    public function index(Request $request)
    {
        $category = \Request::segment(1);
        switch ($category) {
            case "anime":
                $cosplays = DB::table('cosplays')->where('category','Anime')->get();
                break;
            case "cartoons":
                $cosplays = Cosplay::all()->where('category','=','Cartoons');
                break;
            case "dc":
                $cosplays = Cosplay::all()->where('category','=','DC');
                break;
            case "disney":
                $cosplays = Cosplay::all()->where('category','=','Disney');
                break;
            case "dr_who":
                $cosplays = Cosplay::all()->where('category','=','Doctor Who');
                break;
            case "games":
                $cosplays = Cosplay::all()->where('category','=','Games');
                break;
            case "game_of_thrones":
                $cosplays = Cosplay::all()->where('category','=','Game of Thrones');
                break;
            case "harry_potter":
                $cosplays = Cosplay::all()->where('category','=','Harry Potter');
                break;
            case "horror":
                $cosplays = Cosplay::all()->where('category','=','Horror');
                break;
            case "hunger_games":
                $cosplays = Cosplay::all()->where('category','=','Hunger Games');
                break;
            case "lotr":
                $cosplays = Cosplay::all()->where('category','=','Lord of the Rings/Hobbit');
                break;
            case "marvel":
                $cosplays = Cosplay::all()->where('category','=','MARVEL');
                break;
            case "other":
                $cosplays = Cosplay::all()->where('category','=','Other');
                break;
            case "sherlock":
                $cosplays = Cosplay::all()->where('category','=','Sherlock');
                break;
            case "star_trek":
                $cosplays = Cosplay::all()->where('category','=','Star Trek');
                break;
            case "star_wars":
                $cosplays = Cosplay::all()->where('category','=', 'Star Wars');
                break;
            case "supernatural":
                $cosplays = Cosplay::all()->where('category','=','Supernatural');
                break;
            default:
                $cosplays = Cosplay::all();
        }
         // Retrieves all Cosplay instances from the database
        return view('cosplays.index', compact('cosplays'));
    }

    // Display details of a particular cosplay
    public function show(Request $request, Cosplay $cosplay)
    {
        return view('cosplays.show', compact('cosplay'));
    }

    public function create(Request $request)
    {
        return view('cosplays.create');
    }

    // Save new cosplay in cosplay database
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);
        
        $cosplay = new Cosplay([
            'image' => $this->storeImage($request),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'category' => $request->get('category'),
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

    // Update row in cosplay database
    public function update(Request $request, Cosplay $cosplay)
    {
        
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);

        if($request->hasFile('image'))
        {
            $cosplay->image = $this->storeImage($request);
        }

        $cosplay->name = $request->name;
        $cosplay->description = $request->description;
        $cosplay->category = $request->category;
        $cosplay->price = $request->price;

        $cosplay->update();

        return redirect()->route('cosplay.index')
                        ->with('success','Cosplay updated successfully');
        
    }

    // Remove cosplay from database
    public function destroy(Cosplay $cosplay)
    {
        $cosplay->delete();
  
        return redirect()->route('cosplay.index')
                        ->with('success','Cosplay deleted successfully');
    }

    // Format and store image
    public function storeImage(Request $request)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));

        return $image = $file->getFilename().'.'.$extension;
    }

}
