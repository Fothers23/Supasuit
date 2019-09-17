<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cosplay;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $cosplays = Cosplay::all();
        return $cosplays;
    }

    public function show(Request $request, Cosplay $cosplay)
    {
        return $cosplay->name;
    }

    public function create(Request $request, $cosplay)
    {

    }

    public function store(Request $request)
    {

    }

    public function edit(Request $request, $cosplay)
    {
    
    }

    public function update(Request $request, $cosplay)
    {
    
    }

    public function destroy(Request $request, $cosplay)
    {
    
    }


}
