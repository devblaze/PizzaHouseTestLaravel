@extends('layouts.app')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a New Kebab</h1>
    <form action="{{ route('kebab.create') }}" method="POST">
        @csrf
        <br>
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <br>
        
        <label for="name">Choose Bread type:</label>
        <select name="type" id="type">
            <option value="type1">Type 1</option>
            <option value="type2">Type 2</option>
            <option value="type3">Type 3</option>
        </select>
        <br>
        <p>Please select your meat:</p>
        <input type="radio" id="meat" name="meat1" value="meat1">
        Meat 1<br>
        <input type="radio" id="meat" name="meat2" value="meat2">
        Meat 2<br>
        <input type="radio" id="meat" name="meat3" value="meat3">
        Meat 3<br>
        <br>
        <fieldset>
            <label>Extra Sause:</label><br>
            <input type="checkbox" name="sauses[]" value="sause1">Top 1<br>
            <input type="checkbox" name="sauses[]" value="sause2">Top 2<br>
            <input type="checkbox" name="sauses[]" value="sause3">Top 3<br>
        </fieldset>
        <fieldset>
            <label>Extra's:</label><br>
            <input type="checkbox" name="extras[]" value="extra1">Top 1<br>
            <input type="checkbox" name="extras[]" value="extra2">Top 2<br>
            <input type="checkbox" name="extras[]" value="extra3">Top 3<br>
        </fieldset>
        <br>
        <input type="submit" value="Order Kebab">
</div>

@endsection