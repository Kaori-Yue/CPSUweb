<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    //use Searchable;
    public $timestamps = 'true';
    protected $table = 'thesis';
    protected $fillable = [
        'file_id', 'name', 'description'
    ];
}
