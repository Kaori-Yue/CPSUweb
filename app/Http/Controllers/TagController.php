<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $blogs = $tag->blogs()->paginate(9);

        $title = 'หมวดหมู่ : '.$tag->name;
        return view('blog.category', ['blogs' => $blogs, 'title' => $title]);
    }
}
