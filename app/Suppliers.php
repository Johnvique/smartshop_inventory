<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable =[
        'sname',
        'smail',
        'sphone',
        'compname',
        'sstat',
        'sadress',
        'image'
    ];
}
