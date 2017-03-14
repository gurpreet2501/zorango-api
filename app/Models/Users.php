<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use ValidatingTrait;

    protected $table = 'tank_auth_users';

    protected $fillable = ['username','password','email','activated','banned'];

    protected $rules = [
	    'username' => 'required',
        'password' => 'required',
        'email' => 'required',
	  ];

	  protected $validationMessages = [
    	'username.required' => 124,
        'password.required' => 125,
    	'email.required' => 126,
		];

     public $timestamps = true;

}
