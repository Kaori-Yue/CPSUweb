<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $blogs = $tag->blogs;
        $allTags = Tag::all();
        return view('blog.index', ['blogs' => $blogs, 'tags' => $allTags]);
    }
}
