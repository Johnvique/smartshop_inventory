<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'prodname',
        'category',
        'supname',
        'costprice',
        'unit',
        'tprice',
        'image'

    ];
}
