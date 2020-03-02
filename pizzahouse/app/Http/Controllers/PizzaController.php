<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        
        /*
        |--------------------------------------------------------------------------
        | Model 'Queries'
        |--------------------------------------------------------------------------
        |
        | Check documadation for Model
        |* Get all
        $pizzas = Pizza::all();
        |* Get order by {column_name}
        $pizzas = Pizza::orderBy('name', 'desc')->get();
        |* Get where {column_name, equal_with}
        $pizzas = Pizza::where('type', 'type1')->get();
        |* Get latest by created_at database timestamp
        $pizzas = Pizza::latest()->get();
        |* Get a single Pizza with it's ID
        $pizza = Pizza::find($id);
        |* Get a single Pizza with it's ID with a fail safe
        $pizza = Pizza::findOrFail($id);
        */

        $pizzas = Pizza::all();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
        //return view('pizzas.show', ['id' => $id]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        //error_log(request('name'));
        
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');
        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order!');
    }
    

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas')->with('mssg', 'Order Completed!');
    }
}
