<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
  protected $table = 'customer_details';

  protected $fillable = [
    'firstname', 'lastname', 'surnmae', 'email', 'password', 'adrress', 'state', 'country', 'telephone', 'age', 'file'
  ];
}
