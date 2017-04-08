<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Log;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all()->take(5);
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function create()
    {
        $status = [
            'draft' => 'Draft',
            'disable' => 'Disable',
            'publish' => 'Publish',
        ];

        $category = Category::pluck('name', 'id');

        return view('blog.create', [
            'status' => $status,
            'category' => $category
        ]);
    }

    public function store(Request $request)
    {
        $blog = $request->all();
        $slug = str_slug($blog['title']);
        $cover_image = $request->file('cover');
        $file = self::storeFile($cover_image);
        $hash_tags = $blog['hash_tags'];

        // Todo make user_id dynamic
        $blogData = [
            'title' => $blog['title'],
            'slug' => $slug,
            'content' => $blog['content'],
            'cover' => $file->id,
            'status' => $blog['status'],
            'publish_at' => $blog['publish_date'].' '.$blog['publish_time'],
            'category_id' => $blog['category_id'],
            'user_id' => 1
        ];
        $blog = Blog::create($blogData);

        $hash_tags = str_replace(' ', '', $hash_tags);
        $hash_tags = strtolower($hash_tags);
        $hash_tags = explode(',',$hash_tags);

        foreach ($hash_tags as $hash_tag){
            $tagData = [
                'name' => $hash_tag,
                'slug' => $hash_tag,
            ];
            $tag = Tag::firstOrCreate($tagData);

            $blogTagData = [
                'blog_id' => $blog->id,
                'tag_id' => $tag->id
            ];
            BlogTag::create($blogTagData);
        }
        return $blog;
    }

    public function storeFile($file)
    {
        $ex = $file->getClientOriginalExtension();
        Storage::disk('local')->put($file->getFilename(). '.' . $ex, File::get($file));

        $fileRecord = [
            'name' => $file->getFilename(). '.' . $ex,
            'mime' => $file->getClientMimeType(),
            'original_name' => $file->getClientOriginalName(),
        ];

        $file = \App\File::create($fileRecord);
        return $file;
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blog.show', ['blog' => $blog]);
    }
}
