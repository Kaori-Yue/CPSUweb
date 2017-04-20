<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        /*$user = User::find(1);
        $user->blogs;
        return $user;*/

        /*$blog = Blog::find(1);
        $blog->user;
        $blog->category;
        $blog->tags;
        return $blog;*/

        $category = Category::find(1);
        $category->blogs->makeHidden('content');
        return $category;

        /*$tag = Tag::find(1);
        $tag->blogs;
        return $tag;*/
    }

    function slug()
    {
        $str = 'แข่งโน่นนี่นั่น';
        $str = strtolower(trim($str));
        $str = preg_replace('/[^a-z0-9-]/', '-', $str);
        $str = preg_replace('/-+/', "-", $str);
        return $str;
    }
}
