<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public $timestamps = 'true';
    protected $table = 'document';
    protected $fillable = [
        'file', 'name', 'slug', 'description', 'category', 'status'
    ];

    public function file_record()
    {
        return $this->belongsTo('App\File', 'file', 'id', 'file');
    }

    public function scopeShow($query)
    {
        return $query->where('status', 'show');
    }
}
