<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $timestamps = true;
    protected $table = 'staff';
    protected $fillable = [
        'name_th',
        'name_en',
        'email',
        'website',
        'position',
        'image',
        'token',
        'password',
        'status'
    ];

    protected $hidden = [
        'password', 'token'
    ];

    public function scopeDuty($query)
    {
        return $query->where('status', 'duty');
    }
}
