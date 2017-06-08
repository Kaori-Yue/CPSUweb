<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\Category;
use App\Tag;
use App\User;
use App\Research;
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

    public function research()
    {
        $researches = Research::all();
        return $researches;
    }

    public function testExplode()
    {
        $name = 'ผศ.ดร.ปานใจ ธารทัศนวงศ์';
        print_r(explode('.', $name));
    }

    public function testTag()
    {
        $tags = Tag::all();
        foreach ($tags as $tag){
            $count = BlogTag::where('tag_id', $tag->id)->count();
            echo $tag->id.') '.$tag->name.' '.$count.'<br>';
        }
    }
}
