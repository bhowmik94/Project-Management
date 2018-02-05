<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'body',
    'user_id',
    'url',
    'commentable_id',
    'commentable_type',
  ];
}
