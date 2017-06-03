<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index()
    {
        $blog = Blog::publish()->orderBy('updated_at', 'desc')->first();



        return response()->view('sitemap.index',[
            'blog' => $blog,
        ])->header('Content-Type', 'text/xml');
    }
}
