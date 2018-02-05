<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [
    'name',
    'days',
    'hours',
    'project_id',
    'company_id',
    'user_id',
  ];

  public funtion user(){
    return $this->belongsTo('App\Models\User');
  }

  public funtion company(){
    return $this->belongsTo('App\Models\Company');
  }

  public funtion project(){
    return $this->belongsTo('App\Models\Project');
  }

  public funtion users(){
    return $this->belongsToMany('App\Models\User');
  }
}
