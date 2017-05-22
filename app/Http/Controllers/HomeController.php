<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Research;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::where([
            ['category_id', 1],
            ['featured', 1]
        ])->take(4)->get();

        $researches = Research::all()->take(4);
        return view('home', ['blogs' => $blogs, 'researches' => $researches]);
    }
}
