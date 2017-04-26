<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use ValidatingTrait;

    protected $table = 'images';

    protected $fillable = ['image','desc','product_id'];

    protected $rules = [
	    'image'     => 'required',
	    'product_id' => 'required',
	  ];

	  protected $validationMessages = [
    	'image.required' => 133,
    	'product_id.required' => 134,
		];

     public $timestamps = true;

}
