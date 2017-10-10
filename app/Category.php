<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = true;
    protected $table = 'category';
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    public function blogs()
    {
        return $this->hasMany('App\Blog')->orderBy('created_at','DESC');
    }
}
