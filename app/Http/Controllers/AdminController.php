<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Curricula;
use App\Research;
use App\Teacher;
use App\Thesis;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function curricula()
    {
        $curriculas = Curricula::all();
        return view('curricula.admin', ['curriculas' => $curriculas]);
    }

    public function blog()
    {
        /*$status = [
            'draft' => 'Draft',
            'disable' => 'Disable',
            'publish' => 'Publish',
        ];

        $category = Category::pluck('name', 'id');*/
        $orderOptions = [
            'ASC' => 'SortBy: ASC',
            'DESC' => 'SortBy: DESC',
        ];
        $blogs = Blog::all();

        return view('blog.admin', [
            'blogs' => $blogs,
            'orderOptions' => $orderOptions,
        ]);
    }

    public function teacher()
    {
        $orderOptions = [
            'ASC' => 'SortBy: ASC',
            'DESC' => 'SortBy: DESC',
        ];
        $teachers = Teacher::all();
        return view('teacher.admin', ['teachers' => $teachers, 'orderOptions' => $orderOptions]);
    }

    public function thesis()
    {
        $thesis = Thesis::all();
        return view('thesis.admin', ['thesis' => $thesis]);
    }

    public function research()
    {
        $researches = Research::all();
        return view('research.admin', ['researches' => $researches]);
    }
}
