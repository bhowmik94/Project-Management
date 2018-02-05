<?php

namespace App\Models;

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
        'name', 'email', 'password','first_name','middle_name','last_name',
        'city','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public funtion comments(){
      return $this->hasMany('App\Models\Comment');
    }

    public funtion role(){
      return $this->belongsTo('App\Models\Role');
    }

    public funtion companies(){
      return $this->hasMany('App\Models\Comapany');
    }

    public funtion tasks(){
      return $this->belongsToMany('App\Models\Task');
    }

    public funtion projects(){
      return $this->belongsToMany('App\Models\Project');
    }
}
