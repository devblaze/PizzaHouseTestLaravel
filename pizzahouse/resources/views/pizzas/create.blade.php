@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <br>
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="name">Choose Pizza type:</label>
        <select name="type" id="type">
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
            <option value="type3">Type 3</option>
        </select>
        <br>
        <select name="base" id="base">
            <option value="base1">Base 1</option>
            <option value="base2">Base 2</option>
            <option value="base3">Base 3</option>
        </select>
        <br>
        <fieldset>
            <label>Extra Toppings:</label><br>
            <input type="checkbox" name="toppings[]" value="top1">Top 1<br>
            <input type="checkbox" name="toppings[]" value="top2">Top 2<br>
            <input type="checkbox" name="toppings[]" value="top3">Top 3<br>
        </fieldset>
        <br>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price">
        <br>
        <input type="submit" value="Order Pizza">
</div>

@endsection