<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thesis extends Model
{
    public $timestamps = 'true';
    protected $table = 'thesis';
    protected $fillable = [
        'file_id', 'name', 'description'
    ];
}
