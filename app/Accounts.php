<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable =[
        'paydate',
        'payfrom',
        'paytype',
        'payaccount',
        'amount'
    ];
}
