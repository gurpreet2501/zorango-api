<?php

namespace App\Models;
use Watson\Validating\ValidatingTrait;
use Illuminate\Database\Eloquent\Model;

class UserSessions extends Model
{
    use ValidatingTrait;
    protected $table = 'user_sessions';
    protected $fillable = [];
    protected $rules = [];
    protected $validationMessages = [];
    public $timestamps = true;

}
