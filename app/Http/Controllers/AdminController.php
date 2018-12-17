<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Curricula;
use App\Document;
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
        $publish_blog = Blog::where('status', 'publish')->count();
        $draft_blog = Blog::where('status', 'draft')->count();
        $disable_blog = Blog::where('status', 'disable')->count();
        $teacher = Teacher::count();
        $staff = Staff::count();
        $research = Research::count();
        $thesis = Thesis::count();
        $image = File::where('mime', 'like', 'image%')->count();
        $file = File::where('mime', 'NOT LIKE', 'image%')->count();
        $user = User::where('role', '!=', 'admin')->count();
        $admin_user = User::where('role', 'admin')->count();
        $suspend_user = User::where('role', 'suspend')->count();
        $category = Category::count();
        return view('admin.summary', [
            'curricula' => $curricula,
            'publish_blog' => $publish_blog,
            'draft_blog' => $draft_blog,
            'disable_blog' => $disable_blog,
            'teacher' => $teacher,
            'staff' => $staff,
            'research' => $research,
            'thesis' => $thesis,
            'image' => $image,
            'file' => $file,
            'user' => $user,
            'admin_user' => $admin_user,
            'suspend_user' => $suspend_user,
            'category' => $category,
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
        // $teachers = Teacher::orderBy('rank', 'desc')
        //     ->orderBy('name_th')
        //     ->get();
        $researches = Research::orderBy('publication', 'desc')->paginate(10);
        return view('research.admin', ['researches' => $researches]);
    }

    public function research_filter($filter) {
        if ($filter == 'recent') {
            $sort = 'desc';
        } else {
            $sort = 'asc';
        }
        $researches = Research::orderBy('publication', $sort)->paginate(10);
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

    public function document()
    {
        $categories = Document::select('category')->distinct()->get();
        $documents = Document::orderBy('id', 'desc')
            ->paginate(12);
        return view('document.admin', ['documents' => $documents, 'categories' => $categories]);
    }

    public function user()
    {
        $users = User::where('role', '!=', 'admin')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('user.admin', ['users' => $users]);
    }

    public function category()
    {
        $categories = Category::orderBy('name', 'ASC')
            ->paginate(8);

        return view('category.admin', [
            'categories' => $categories,
        ]);
    }
}
