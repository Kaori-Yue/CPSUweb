<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Curricula;
use App\File;
use App\Research;
use App\Staff;
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
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->paginate(8);

        return view('blog.admin', [
            'blogs' => $blogs,
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

    public function staff()
    {
        $staffs = Staff::all();
        return view('staff.admin', ['staffs' => $staffs]);
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

    public function image()
    {
        $images = File::where('mime', 'like', 'image%')
            ->orderBy('id', 'desc')
            ->paginate(20);
        return view('image.admin', ['images' => $images]);
    }
}
