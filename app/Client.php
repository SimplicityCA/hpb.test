<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = [
      'ruc', 'name', 'store_name', 'last_name', 'city', 'address', 'phone', 'email', 'message'
  ];
}
