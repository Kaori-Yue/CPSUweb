<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\Category;
use App\Tag;
use App\User;
use App\File;
use App\Research;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;
use App\Traits\ImageTrait;

class TestController extends Controller
{
    use ImageTrait;
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

    public function testImage()
    {
        $img = Image::cache(function($image) {
            return $image->make(storage_path().'\\app\\resize_3-1.jpg');
        }, 60, true);

        return $img->response('jpg');
    }

    public function resizeImg()
    {
        for ($i = 0; $i <= 0; $i++){
            $image = File::findOrFail(20);
            $file = Storage::disk('local')->get($image->original_name);

            $img = Image::make($file)->resize('400', null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $img->save(storage_path().'\\app\\resize_'.$image->name);
        }
        return 'resize complete';
    }

    public function testCompress()
    {
        $file = File::find(30);
        //$size = Storage::disk('local')->size($file->name);

        if (App::environment('local')) {
            //windows path
            $img_path = storage_path().'\\app\\'.$file->name;
        }else{
            //linux path
            $img_path = storage_path().'/app/'.$file->name;
        }

        if ($file->mime == 'image/jpeg')
            $image = imagecreatefromjpeg($img_path);

        elseif ($file->mime == 'image/gif')
            $image = imagecreatefromgif($img_path);

        elseif ($file->mime == 'image/png')
            $image = imagecreatefrompng($img_path);

        else
            return abort(500);

        if (App::environment('local')) {
            //windows path
            $des_path = storage_path().'\\app\\compress_'.$file->name;
        }else{
            //linux path
            $des_path = storage_path().'/app/compress_'.$file->name;
        }

        imagejpeg($image, $des_path, 25);

        return 'compress finish';

    }

    public function compressAll()
    {
        //$names = ['1-1.jpg', '2-1.jpg', '3-1.jpg', '4-1.jpg', '5-1.jpg', '6-1.jpg', '7-1.jpg', '8-1.jpg', '9-1.jpg', '10-1.jpg', '11-1.jpg', '12-1.jpg', '13-1.jpg', '14-1.jpg', '15-1.jpg', '16-1.jpg', '17-1.jpg', '18-1.jpg', '19-1.jpg', '20-1.jpg', '21-1.jpg', 'staff1.jpg', 'staff2.jpg', 'staff3.jpg', 'staff4.jpg', 'staff5.jpg', 'blog.jpg', 'ITPE.jpg', 'NSC2012_Price.jpg', 'Olympic.jpg', 'posterupdate.jpg'];
        $names = ['blog.jpg', 'ITPE.jpg', 'NSC2012_Price.jpg', 'Olympic.jpg', 'posterupdate.jpg'];
        foreach ($names as $name){

            if (App::environment('local')) {
                //windows path
                $img_path = storage_path().'\\app\\'.$name;
                $des_path = storage_path().'\\app\\cp_'.$name;
            }else{
                //linux path
                $img_path = storage_path().'/app/'.$name;
                $des_path = storage_path().'/app/cp_'.$name;
            }

            $size = Storage::disk('local')->size($name);
            $image = imagecreatefromjpeg($img_path);

            if($size > 10000000){//         5 MB
                imagejpeg($image, $des_path, 10);
            }elseif($size > 2000000){//     2 MB
                imagejpeg($image, $des_path, 20);
            }elseif($size > 1000000){//     1 MB
                imagejpeg($image, $des_path, 25);
            }elseif($size > 200000){//      200 KB
                imagejpeg($image, $des_path, 50);
            }else{
                imagejpeg($image, $des_path, 80);
            }
            $name = 'cp_'.$name;


            $image = Storage::disk('local')->get($name);
            $img = Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            if (App::environment('local')) {
                //windows path
                $img->save(storage_path().'\\app\\re_'.$name);
            }else{
                //linux path
                $img->save(storage_path().'/app/re_'.$name);
            }


            $img = Image::make($image)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            if (App::environment('local')) {
                //windows path
                $img->save(storage_path().'\\app\\thumb_'.$name);
            }else{
                //linux path
                $img->save(storage_path().'/app/thumb_'.$name);
            }
        }
        return 'finish';
    }
}
