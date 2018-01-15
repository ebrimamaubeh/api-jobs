<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
  protected $fillable = ['body'];
    public function job(){
      return $this->belongsTo('App\Job');
    }
}
