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
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $curricula = Curricula::count();
        $blog = Blog::count();
        $teacher = Teacher::count();
        $staff = Staff::count();
        $research = Research::count();
        $thesis = Thesis::count();
        $image = File::where('mime', 'like', 'image%')->count();
        $file = File::where('mime', 'NOT LIKE', 'image%')->count();
        $user = User::where('role', '!=', 'admin')->count();

        return view('admin.summary', [
            'curricula' => $curricula,
            'blog' => $blog,
            'teacher' => $teacher,
            'staff' => $staff,
            'research' => $research,
            'thesis' => $thesis,
            'image' => $image,
            'file' => $file,
            'user' => $user
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
        $teachers = Teacher::orderBy('rank', 'desc')
            ->orderBy('name_th')
            ->get();
        return view('teacher.admin', [
            'teachers' => $teachers
        ]);
    }

    public function staff()
    {
        $staffs = Staff::orderBy('name_th')->get();
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

    public function file()
    {
        $files = File::where('mime', 'NOT LIKE', 'image%')
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view('file.admin', ['files' => $files]);
    }

    public function user()
    {
        $users = User::where('role', '!=', 'admin')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('user.admin', ['users' => $users]);
    }
}
