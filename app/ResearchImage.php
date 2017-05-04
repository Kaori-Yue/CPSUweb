<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchImage extends Model
{
    public $timestamps = false;
    protected $table = 'research_image';
    protected $fillable = [
        'research_id',
        'image_id',
        'name',
        'description',
    ];
}
