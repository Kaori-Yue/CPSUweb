<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps = true;
    protected $table = 'blog';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'cover',
        'status',
        'publish_at',
        'user_id',
        'category_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'blog_tag', 'blog_id','tag_id');
    }
}
