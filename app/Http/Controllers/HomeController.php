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
        //Todo Blog for homepage
        $blogs = Blog::where('category_id', 1)->take(6)->get();
        $researches = Research::all()->take(4);
        return view('home', ['blogs' => $blogs, 'researches' => $researches]);
    }
}
