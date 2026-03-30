<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $table = 'tbl_users';
    protected $primaryKey  = 'user_id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;
}
