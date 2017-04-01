<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $status = [
            'draft' => 'Draft',
            'disable' => 'Disable',
            'publish' => 'Publish',
        ];

        $category = Category::pluck('name', 'id');

        return view('blog.create', [
            'status' => $status,
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $blog = $request->all();
        $slug = strtolower($blog['slug']);
        $slug = str_replace(' ','-',$slug);
        $blog['slug'] = $slug;
    }
}
