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

        $blogs = Blog::where('featured', 1)
            ->orderBy('created_at', 'DESC')
            ->publish()
            ->take(4)
            ->get();

        for($i = 0; $i < 4; ++$i){
            $blogs[$i]["content"] = self::cutContent($blogs[$i]["content"]);
        }

        $curriculas = Curricula::enable()->take(2)->get();
        return view('home2', [
            'blogs' => $blogs,
            'curriculas' => $curriculas
        ]);
    }

    public function cutContent($content)
    {
        if(strlen($content) > 40){
           $content =  str_limit($content, 40);
        }
        return $content;
    }
}
