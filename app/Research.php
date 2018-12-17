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
        'info', 'publication', 'name_th'
    ];

    public function images()
    {
        return $this->belongsToMany('App\File', 'research_id','image_id')
            ->withPivot('name', 'description');
        // return $this->belongsToMany('App\File', 'research_image', 'research_id','image_id')
        //     ->withPivot('name', 'description');
    }

    public function user() {
        return $this->belongsToMany('App\Teacher', 'research_owner', 'research_id', 'teacher_id');
        // return $this->belongsToMany('App\User');
        // return $this->belongsToMany('App\ResearchOwner', 'ResearchOwner');
    }

    public function teacher() {
        return $this->belongsToMany(Teacher::class, 'research_owner');
    }

    // static public function getResearch($id, $order) {
    //     return \App\Teacher::findOrFail($id)->researchs()->orderBy('publication', $order)->get();
    // }
}
