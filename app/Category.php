<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function group(){
      return $this->belongsTo('App\Group');
  }
}
