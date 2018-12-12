<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    //use Searchable;
    public $timestamps = 'true';
    protected $table = 'research';
    protected $fillable = [
        'file', 'name', 'slug', 'description', 'owner', 'date'
    ];

    public function images()
    {
        return $this->belongsToMany('App\File', 'research_id','image_id')
            ->withPivot('name', 'description');
        // return $this->belongsToMany('App\File', 'research_image', 'research_id','image_id')
        //     ->withPivot('name', 'description');
    }

    public function user() {
        // return $this->belongsToMany('App\ResearchOwner', 'research_owner', 'research_id', 'teacher_id');
        return $this->belongsToMany('App\User');
    }

    static public function getResearch($id, $order) {
        return \App\User::findOrFail($id)->researchs()->orderBy('date', $order)->get();
    }
}
