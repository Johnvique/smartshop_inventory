<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable =[
        'iname',
        'supname',
        'pstat',
        'pquant',
        'pprice',
        'ptotal',
        'pdate'
    ];
}
