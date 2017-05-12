<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Curricula extends Model
{
    //use Searchable;
    public $timestamps = true;
    protected $table = 'curricula';
    protected $fillable = [
        'slug',
        'degree',
        'name_th',
        'name_en',
        'degree_name_th',
        'degree_name_en',
        'cost',
        'credit',
        'graduation_criteria',
        'enrollment_criteria',
        'status',
        'file'
    ];
}
