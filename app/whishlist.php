<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class whishlist extends Model
{
    //
    protected $fillable = ['product_id', 'user_id'];

    protected $table = 'wishlist';
}
