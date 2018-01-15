<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function catgeories(){
        return $this->hasMany('App\Category');
    }
}
