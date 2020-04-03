<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebabController extends Controller
{
    public function create(){
        return view('kebab.create');
    }
}
