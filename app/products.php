<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
  //
  protected $table = 'product';

  protected $fillable = [
    'firstname', 'lastname', 'username', 'surnmae', 'email', 'password', 'adrress', 'state', 'country', 'telephone', 'age', 'file'
  ];
}
