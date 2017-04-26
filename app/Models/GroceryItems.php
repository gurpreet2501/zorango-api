<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class GroceryItems extends Model
{
    use ValidatingTrait;

    protected $table = 'grocery_items';

    protected $fillable = ['item_name','price','description' ,'weight_unit','weight','brand','stock','items_per_carton'];

    protected $rules = [
	    'item_name'     => 'required',
	    'price' => 'required',
	    'stock'    => 'required',
	  ];

	  protected $validationMessages = [
    	'item_name.required' => 123,
    	'price.required' => 122,
    	'stock.required' => 119,
		];

     public $timestamps = true;

     function images(){
        return $this->hasMany(Images::class, 'product_id');

     }
}
