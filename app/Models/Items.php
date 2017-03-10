<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use ValidatingTrait;

    protected $table = 'products';

    protected $fillable = ['name','price','description' ,'weight_unit','weight','brand','stock','items_per_carton'];

    protected $rules = [
	    'name'     => 'required',
	    'price' => 'required',
	    'weight'    => 'required',
	    'weight_unit'    => 'required',
	    'description'    => 'required',
	    'brand'    => 'required',
	    'stock'    => 'required',
	    'items_per_carton'    => 'required',
	  ];

	  protected $validationMessages = [
    	'name.required' => 123,
    	'price.required' => 122,
    	'weight.required' => 116,
    	'weight_unit.required' => 117,
    	'description.required' => 118,
    	'brand.required' => 120,
    	'stock.required' => 119,
    	'items_per_carton.required' => 121
		];

     public $timestamps = true;

}
