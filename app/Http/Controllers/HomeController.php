<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Research;
use Illuminate\Http\Request;
use DB;

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
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }

        $blogs = Blog::where('featured', 1)
            ->orderBy('created_at', 'DESC')
            ->publish()
            ->take(4)
            ->get();

        $researches = Research::all()->take(4);
        return view('home', ['blogs' => $blogs, 'researches' => $researches]);
    }
}
