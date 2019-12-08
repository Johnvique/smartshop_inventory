<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'prodname',
        'catgy',
        'supname',
        'costprice',
        'pprice',
        'unit',
        'image'

    ];
}
