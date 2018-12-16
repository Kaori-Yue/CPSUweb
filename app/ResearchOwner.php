<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchOwner extends Model
{
    public $timestamps = false;
    protected $table = 'research_owner';
    protected $fillable = [
        'teacher_id',
        'research_id',
    ];

    public function researchs() {
        return $this->hasMany(Research::class, 'id');
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class);
    }
}


// $table->increments('id');
// $table->integer('teacher_id')->unsigned();
// $table->integer('research_id')->unsigned();