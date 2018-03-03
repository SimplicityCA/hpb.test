<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  protected $fillable = [
      'title', 'subtitle', 'link', 'description', 'characteristics', 'home_image', 'header_image', 'description_image'
  ];
}
