<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //

    protected $fillable = [
        'branch', 'semester',
    ];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
}
