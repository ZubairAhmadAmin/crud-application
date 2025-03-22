<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // protected $table = 'users'; when we create model name same as table name but singular and first later upercase do not need to connect model to table and don,t need to defined primary key.
    // protected $table = 'user_id'; when we use uuid we need to add id type because it is string but when we use id we don,t need to add id type because it is integer. or we can to change id type by using keytype.
    // public $incrementing = false;
    // public $timestamps = false; when we don,t have timestamps field in table or migration.
    // const CREATED_AT = 'created';
    // const UPDATED_AT = 'updated'; 
    // protected $connection = 'mysql' or another dbms; --> when we use tow or more dbms like mysql,postgray, mangodb or more

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'phone',
    ];
}
