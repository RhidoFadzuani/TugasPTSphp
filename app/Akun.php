<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Akun extends Authenticatable
{
    protected $primaryKey ='npm';

    protected $fillable = [
        'nama',
    'username',
    'password',
];

public $timestamps = false;
}
