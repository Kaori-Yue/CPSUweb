<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //use Searchable;
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

    public function scopeDuty($query)
    {
        return $query->where('status', 'duty');
    }

    public function scopeStudy($query)
    {
        return $query->where('status', 'study');
    }

    public function scopeRetire($query)
    {
        return $query->where('status', 'retire');
    }

    public function scopeDisable($query)
    {
        return $query->where('status', 'disable');
    }

    public function researchs() {
        return $this->belongsToMany('App\Research', 'research_owner', 'teacher_id', 'research_id');
        // return $this->belongsToMany('App\Teacher', 'research_owner', 'research_id', 'teacher_id');
        // return $this->hasMany('App\ResearchOwner');
    }

    // public function user() {

    // }
}
