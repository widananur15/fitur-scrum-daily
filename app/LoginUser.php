<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginUser extends Model
{
    public $table = 't_user';
    public $primaryKey = 'user_id';
    public $timestamps = false;
}
