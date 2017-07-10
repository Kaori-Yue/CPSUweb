<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\Category;
use App\File;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImageTrait;
use Log;

class BlogController extends Controller
{
    use ImageTrait;
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')
            ->publish()
            ->take(6)
            ->get();

        $features = Blog::where('featured', 1)
            ->orderBy('created_at', 'DESC')
            ->publish()
            ->take(4)
            ->get();

        $tags = Tag::all();
        foreach ($tags as $tag){
            $tag_count = BlogTag::where('tag_id', $tag->id)->count();
            $tag['weight'] = $tag_count;
        }

        return view('blog.index2', [
            'blogs' => $blogs,
            'tags' => $tags,
            'features' => $features
        ]);
    }

    public function filter($filter)
    {
        $blogs = Blog::where('status', $filter)
            ->orderBy('created_at', 'DESC')
            ->paginate(8);

        return view('blog.admin',['blogs' => $blogs]);
    }

    public function create()
    {
        $status = [
            'draft' => 'Draft',
            'disable' => 'Disable',
            'publish' => 'Publish',
        ];

        $category = Category::pluck('name', 'id');
        $images = \App\File::where('mime', 'like','image%')
            ->orderBy('id', 'desc')
            ->take(16)
            ->get();

        $files = \App\File::where('mime', 'NOT LIKE', 'image%')
            ->orderBy('id', 'desc')
            ->take(16)
            ->get();

        return view('blog.create', [
            'status' => $status,
            'category' => $category,
            'images' => $images,
            'files' => $files
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
        $file = $this->storeImage($cover_image, 'cover');

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

        return redirect()->action('AdminController@blog')
            ->with('status', 'Create Complete!');
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
            $file = $this->storeImage($cover_image, 'cover');
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

    public function show($slug)
    {
        $slug = urldecode($slug);
        $blog = Blog::where('slug', $slug)
            ->publish()
            ->firstOrFail();

        $blogTag = $blog->tags;
        $allBlog = Blog::all()->reverse();

        $collection = new Collection();
        foreach ($allBlog as $b){
            $intersect = $blogTag->intersect($b->tags);
            $collection->push([
                'blog_id' => $b->id,
                'intersect' => sizeof($intersect)
            ]);
        }

        $sorted = $collection->where('intersect', '>=', 1)
            ->sortByDesc('intersect')
            ->values();

        $sorted = $sorted->sortByDesc('blog_id')->values()->take(3);
        $relateBlog_id = [];
        foreach ($sorted as $sort){
            array_push($relateBlog_id, $sort['blog_id']);
        }
        $relateBlogs = Blog::publish()
            ->whereIn('id', $relateBlog_id)
            ->where('id', '!=', $blog->id)
            ->orderBy('id', 'desc')
            ->get();

        //return $relateBlogs;
        return view('blog.show', [
            'blog' => $blog,
            'relateBlogs' => $relateBlogs
        ]);
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog_tags = BlogTag::where('blog_id', $blog->id)->get();
        foreach ($blog_tags as $blog_tag){
            $blog_tag->delete();
        }

        $cover = File::findOrFail($blog->cover);
        self::deleteImage($cover);

        $blog->delete();

        return redirect()->action('AdminController@blog')->with('status', 'Delete Complete!');
    }

    public function category($category)
    {
        $title = '';
        $blogs = null;
        if ($category == 'featured-news'){
            $title = 'หมวดหมู่ : ข่าวเด่น';
            $blogs = Blog::publish()
                ->where('featured', 1)
                ->orderBy('created_at', 'DESC')
                ->paginate(9);
        }
        elseif ($category == 'latest-news'){
            $title = 'หมวดหมู่ : ข่าวล่าสุด';
            $blogs = Blog::publish()
                ->orderBy('created_at', 'DESC')
                ->paginate(9);
        }else{
            abort(404);
        }

        return view('blog.category', ['blogs' => $blogs, 'title' => $title]);
    }
}
