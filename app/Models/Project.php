<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
      'name',
      'days',
      'description',
      'company_id',
      'user_id',
    ];

    public funtion user(){
      return $this->belongsToMany('App\Models\User');
    }

    public funtion company(){
      return $this->belongsTo('App\Models\Company');
    }
}
