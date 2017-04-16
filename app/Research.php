<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    public $timestamps = 'true';
    protected $table = 'research';
    protected $fillable = [
        'file_id', 'name', 'description'
    ];
}
