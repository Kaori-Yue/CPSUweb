<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function blogs(){
        return $this->hasMany('App\Blog');
    }

    public function researchs() {
        // return $this->belongsToMany('App\ResearchOwner', 'research_owner', 'research_id', 'teacher_id');
        return $this->belongsToMany('App\Research');
    }

    // public function teacher() {
    //     // return $this->hasOne('App\Teacher');
    //     return $this->hasOne('App\Teacher', 'teacher_id');
    // }
}
