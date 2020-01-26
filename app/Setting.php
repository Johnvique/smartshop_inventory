<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'business_name',
        'box_address',
        'location',
        'vision',
        'logo'
    ];
}
