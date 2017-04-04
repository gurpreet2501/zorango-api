<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class UserSessions extends Model
{
    use ValidatingTrait;
    protected $table = 'user_sessions';
    protected $fillable = ['user_id','token'];
    protected $rules = [];
    protected $validationMessages = [];
    public $timestamps = true;

}
