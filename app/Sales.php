<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable =[
        'itname',
        'cusname',
        'salstat',
        'salquant',
        'salprice',
        'saltotal',
        'saldate'
    ];
}
