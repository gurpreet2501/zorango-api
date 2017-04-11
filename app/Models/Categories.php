<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use ValidatingTrait;

    protected $table = 'categories';

    protected $fillable = ['category_name'];

    protected $rules = [
	    'category_name'     => 'required',
	  ];

	  protected $validationMessages = [
    	'category_name.required' => 132,
		];

     public $timestamps = true;

}
