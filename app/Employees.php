<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable =[
        'ename',
        'eemail',
        'ephone',
        'eadress',
        'estat',
        'image'
    ];
}
