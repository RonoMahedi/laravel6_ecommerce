<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    protected $guarded = [];
    use SoftDeletes;

    public function users(){
        return $this->hasMany('App\User');
    }
}
