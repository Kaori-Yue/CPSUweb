<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    public $timestamps = 'true';
    protected $table = 'research';
    protected $fillable = [
        'file_id', 'name', 'slug', 'description'
    ];

    public function images()
    {
        return $this->belongsToMany('App\File', 'research_image', 'research_id','image_id')
            ->withPivot('name', 'description');
    }
}
