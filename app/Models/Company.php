<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  protected $fillable = [
    'description',
    'user_id',
  ];

  public funtion user(){
    return $this->belongsTo('App\Models\User');
  }
}
