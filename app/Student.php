<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Student extends Model
{
    use HasRoles;
    protected $guard_name = 'web';
    //
    protected $fillable = [
        'name','rollNo','grade_id'
    ];
    public $timestamps = false;

    public function grades()
    {
        return $this->belongsTo('App\Grade');
    }
}
