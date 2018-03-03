<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePicture extends Model
{
    protected $table = 'home_pictures';

    protected $fillable = [
      'title', 'subtitle', 'image', 'location'
  ];
}
