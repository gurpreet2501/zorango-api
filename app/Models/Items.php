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
    	'name.required' => "Name field required",
    	'price.required' => "Price field required",
    	'weight.required' => "Weight field required",
    	'weight_unit.required' => "Weight Unit field required",
    	'description.required' => "Description field required",
    	'brand.required' => "Brand field required",
    	'stock.required' => "Stock field required",
    	'items_per_carton.required' => "Items per carton field required",
		];

     public $timestamps = true;

}
