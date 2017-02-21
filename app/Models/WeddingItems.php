<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeddingItems extends Model
{
     protected $table = 'wedding_products';

     protected $fillable = ['name','price','description' ,'weight_unit','weight','brand','stock','items_per_carton'];
     
}
