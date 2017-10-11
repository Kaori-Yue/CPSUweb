<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //use Searchable;
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
        'featured',
        'description'
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

    public function scopePublish($query)
    {
        return $query->where('status', 'publish');
    }
}
