<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class custom extends Model
{
  //
  protected $table = 'customer_details';

  protected $fillable = [
    'firstname', 'lastname', 'username', 'surnmae', 'email', 'password', 'adrress', 'state', 'country', 'telephone', 'age', 'file'
  ];
}
