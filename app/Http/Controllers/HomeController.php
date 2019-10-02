<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Convention;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home.main');
    }

    public function discussion()
    {
        $articles = Article::all();
        return view('home.discussion', compact('articles'));
    }

    public function upcoming()
    {
        $welshCons = Convention::all()->where('country', '==', 'Wales');
        $engCons = Convention::all()->where('country', '==', 'England');
        $scotCons = Convention::all()->where('country', '==', 'Scotland');
        $irishCons = Convention::all()->where('country', '==', 'Ireland');

        return view('home.upcoming', compact('welshCons', 'scotCons'), compact('engCons', 'irishCons'));
    }

    public function tips()
    {
        return view('home.tips');
    }
}
