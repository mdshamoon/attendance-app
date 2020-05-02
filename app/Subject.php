<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //

    protected $fillable = [
        'code','name'
    ];
    public $timestamps = false;
    
    public function grades()
    {
        return $this->belongsToMany('App\Grade');
    }
}
