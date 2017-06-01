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
        $curricula = Curricula::count();
        $blog = Blog::count();
        $teacher = Teacher::count();
        $research = Research::count();
        $thesis = Thesis::count();
        return view('admin.summary', [
            'curricula' => $curricula,
            'blog' => $blog,
            'teacher' => $teacher,
            'research' => $research,
            'thesis' => $thesis
        ]);
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
        $blogs = Blog::paginate(8);

        return view('blog.admin', [
            'blogs' => $blogs,
            'orderOptions' => $orderOptions,
        ]);
    }

    public function teacher()
    {
        $orderOptions = [
            'Rank' => 'SortBy: Rank',
            'ASC' => 'SortBy: ASC',
            'DESC' => 'SortBy: DESC',
        ];
        $teachers = Teacher::orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();
        return view('teacher.admin', ['teachers' => $teachers, 'orderOptions' => $orderOptions]);
    }

    public function thesis()
    {
        $thesis = Thesis::all();
        return view('thesis.admin', ['thesis' => $thesis]);
    }

    public function research()
    {
        $researches = Research::paginate(10);
        return view('research.admin', ['researches' => $researches]);
    }
}
