<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Curricula;
use App\Research;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration.");
        }

        $bookmarks = Blog::where('featured', '=', 1)
            ->publish()
            ->get();

        $category_id = Category::where('slug','=','announce')
            ->pluck('id');

        $blogs_a = Blog::orderBy('created_at', 'DESC')
            ->where('category_id','=', $category_id)
            ->publish()
            ->take(3)
            ->get();

        $blogs_f = Blog::orderBy('created_at', 'DESC')
            ->where('featured', '=', '1')
            ->publish()
            ->take(5)
            ->get();

        $blogs = Blog::orderBy('created_at', 'DESC')
            ->publish()
            ->take(4)
            ->get();

        foreach ($blogs as $blog){
            //$blog['description'] = $this->cutContent($blog['description']);
        }

        foreach ($blogs_a as $blog){
            //$blog['description'] = $this->cutContent($blog['description']);
        }

        foreach ($blogs_f as $blog){
            //$blog['description'] = $this->cutContent($blog['description']);
        }

        /*for($i = 0; $i < 4; ++$i){
            $blogs[$i]["content"] = self::cutContent($blogs[$i]["content"]);
        }*/
        $announce = Category::with('blogs')->where('slug', 'announce')->paginate(5);

        $curriculas = Curricula::enable()->take(2)->get();
        return  view('home2', [
            'bookmarks' => $bookmarks,
            'blogs' => $blogs,
            'blogs_f' => $blogs_f,
            'blogs_a' => $blogs_a,
            'curriculas' => $curriculas,
            'announce' => $announce[0],
        ]);
    }

    public function cutTitle($content)
    {
        if(strlen($content) > 22){
            $content =  str_limit($content, 22);
        }
        return $content;
    }

    public function cutContent($content)
    {
        if(strlen($content) > 100){
            $content =  str_limit($content, 100);
        }
        return $content;
    }
}
