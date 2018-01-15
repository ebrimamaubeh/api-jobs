<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{

  use HasApiTokens, Notifiable;


   protected $with = ['jobs','roles','userable','skills'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','userable_id','userable_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userable()
   {
       return $this->morphTo();
   }

   public function isSuperAdmin(){
     //needs
   }

   public function skills(){
     return $this->belongsToMany('App\Category','skills','user_id','category_id');
   }

   public function jobs(){
     return $this->hasMany('App\Job');
   }
   public function applications(){
     return $this->belongsToMany('App\Job');
   }

   public function roles(){
     return $this->belongsToMany('App\Role');
   }

}
