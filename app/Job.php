<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $with=['categories','type','level','status','descriptions'];

    public function categories(){
      return $this->belongsToMany('App\Category');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function descriptions(){
      return $this->hasMany('App\Description');
    }

    public function type(){
      return $this->belongsTo('App\Type');
    }

    public function level(){
      return $this->belongsTo('App\Level');
    }

    public function status(){
      return $this->belongsTo('App\Status');
    }


    public function roles(){
       return $this->belongsToMany('App\Role');
    }

    public function applications(){
       return $this->belongsToMany('App\Job','job_user','job_id','user_id');
    }

    public function isSuper(){
          //needs implementation
    }




}
