<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->take(3);
        return view('home', ['blogs' => $blogs]);
    }
}
