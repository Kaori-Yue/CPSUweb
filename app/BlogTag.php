<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    public $timestamps = false;
    protected $table = 'blog_tag';
    protected $fillable = [
        'blog_id',
        'tag_id',
    ];
}
