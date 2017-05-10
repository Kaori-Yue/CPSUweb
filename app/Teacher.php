<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public $timestamps = true;
    protected $table = 'teacher';
    protected $fillable = [
        'name_th',
        'name_en',
        'doctor_degree',
        'master_degree',
        'bachelor_degree',
        'email',
        'website',
        'position',
        'rank',
        'expertise',
        'image',
        'token',
        'password',
        'status'
    ];

    protected $hidden = [
        'password', 'token'
    ];
}
