<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzasCompleted extends Model
{
    protected $table = 'pizzas_completed';
    protected $casts = [
        'toppings' => 'array'
    ];
}
