<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Log;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->take(6)
            ->get();

        $features = Blog::where('featured', 1)
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();

        $tags = Tag::all();

        return view('blog.index', [
            'blogs' => $blogs,
            'tags' => $tags,
            'features' => $features
        ]);
    }

    public function sortBy(Request $request)
    {
        $sortBy = $request->get('sort_by');

        if($sortBy == 'DESC')
        {
            $orderOptions = [
                'DESC' => 'SortBy: DESC',
                'ASC' => 'SortBy: ASC',
            ];
            $blogs = Blog::orderBy('id', 'desc')->paginate(9);
        }
        else
        {
            $orderOptions = [
                'ASC' => 'SortBy: ASC',
                'DESC' => 'SortBy: DESC',
            ];
            $blogs = Blog::orderBy('id')->paginate(9);
        }

        return view('blog.admin', ['blogs' => $blogs, 'orderOptions' => $orderOptions]);
    }

    public function create()
    {
        $status = [
            'draft' => 'Draft',
            'disable' => 'Disable',
            'publish' => 'Publish',
        ];

        $category = Category::pluck('name', 'id');
        $images = \App\File::where('mime', 'image/jpeg')->get();

        return view('blog.create', [
            'status' => $status,
            'category' => $category,
            'images' => $images
        ]);
    }

    public function edit($slug)
    {
        $blog = Blog::where('slug', '=', $slug)->first();

        $datetime = explode(' ', $blog['publish_at']);
        $blog['publish_date'] = $datetime[0];
        $blog['publish_time'] = $datetime[1];

        $allTag = '';
        foreach ($blog->tags as $tag){
            $allTag .= $tag->name.',';
        }
        $blog['hash_tags'] = substr($allTag, 0, -1);

        $status = [
            'draft' => 'Draft',
            'disable' => 'Disable',
            'publish' => 'Publish',
        ];

        $category = Category::pluck('name', 'id');
        $images = \App\File::where('mime', 'image/jpeg')->get();

        return view('blog.edit', [
            'blog' => $blog,
            'status' => $status,
            'category' => $category,
            'images' => $images
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cover' => 'required|image',
            'title' => 'required|unique:blog|max:191',
            'content' => 'required',
            'status' => 'required|in:draft,disable,publish',
            'category_id' => 'required|integer|min:0',
            'featured' => 'required|integer|between:0,1',
        ]);

        $blog = $request->all();
        $slug = self::handleSlug($blog['title']);

        $cover_image = $request->file('cover');
        $file = self::storeFile($cover_image);

        $hash_tags = $blog['hash_tags'];

        $blogData = [
            'title' => $blog['title'],
            'slug' => $slug,
            'content' => $blog['content'],
            'cover' => $file->id,
            'status' => $blog['status'],
            'publish_at' => $blog['publish_date'].' '.$blog['publish_time'],
            'category_id' => $blog['category_id'],
            'user_id' => Auth::id(),
            'featured' => $blog['featured'],
        ];
        $blog = Blog::create($blogData);

        self::handleTags($hash_tags, $blog);

        return redirect()->action('AdminController@blog')->with('status', 'Create Complete!');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cover' => 'image',
            'title' => 'required|max:191',
            'content' => 'required',
            'status' => 'required|in:draft,disable,publish',
            'category_id' => 'required|integer|min:0',
            'featured' => 'required|integer|between:0,1',
        ]);

        $blog = Blog::findOrFail($id);
        $updateBlog = $request->all();

        $slug = self::handleSlug($updateBlog['title']);
        $cover_image = $request->file('cover');

        $hash_tags = $updateBlog['hash_tags'];

        $blogData = [
            'title' => $updateBlog['title'],
            'slug' => $slug,
            'content' => $updateBlog['content'],
            'status' => $updateBlog['status'],
            'publish_at' => $updateBlog['publish_date'].' '.$updateBlog['publish_time'],
            'category_id' => $updateBlog['category_id'],
            'user_id' => Auth::id()
        ];
        if(isset($cover_image)){
            $file = self::storeFile($cover_image);
            $blogData['cover'] = $file->id;
        }
        $blog->update($blogData);
        self::handleTags($hash_tags, $blog);

        return redirect()->action('AdminController@blog')->with('status', 'Update Complete!');
    }

    public function handleSlug($str)
    {
        $slug = str_replace(' ', '-', $str);
        return $slug;
    }

    public function handleTags($hash_tags, $blog)
    {
        $hash_tags = str_replace(' ', '', $hash_tags);
        $hash_tags = strtolower($hash_tags);
        if(substr($hash_tags, strlen($hash_tags)-1) == ','){
            $hash_tags = substr($hash_tags, 0, -1);
        }
        $hash_tags = explode(',',$hash_tags);

        BlogTag::where('blog_id', $blog->id)->delete();

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
            BlogTag::firstOrCreate($blogTagData);
        }
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
        $slug = urldecode($slug);
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', ['blog' => $blog]);
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog_tags = BlogTag::where('blog_id', $blog->id)->get();
        foreach ($blog_tags as $blog_tag){
            $blog_tag->delete();
        }
        $blog->delete();

        return redirect()->action('AdminController@blog')->with('status', 'Delete Complete!');
    }

    public function category($category)
    {
        $title = '';
        $blogs = null;
        if ($category == 'featured-news'){
            $title = 'หมวดหมู่ : ข่าวเด่น';
            $blogs = Blog::where('featured', 1)->orderBy('created_at', 'DESC')->paginate(9);
        }
        elseif ($category == 'latest-news'){
            $title = 'หมวดหมู่ : ข่าวล่าสุด';
            $blogs = Blog::orderBy('created_at', 'DESC')->paginate(9);
        }else{
            abort(404);
        }

        return view('blog.category', ['blogs' => $blogs, 'title' => $title]);
    }
}
