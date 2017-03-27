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
	    'username' => 'required|unique|required_without:email',
        'password' => 'required',
        'email' => 'required|unique|required_without:username',
	  ];

	  protected $validationMessages = [
    	'username.required' => 124,
        'password.required' => 125,
        'email.required' => 126,
        'email.unique' => 128,
        'username.unique' => 127,
    	'email.required_without' => 129,
        ];

     public $timestamps = true;

}
