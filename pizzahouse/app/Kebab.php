<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kebab extends Model
{
    //
    protected $casts = [
        'sauses' => 'array',
        'extras' => 'array'
    ];
}
