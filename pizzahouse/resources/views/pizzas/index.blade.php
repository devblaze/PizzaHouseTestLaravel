@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">
    @foreach($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/pizza_icon.png" alt="pizza icon">
            <h4>
                <a href="/pizzas/{{ $pizza->id }}">{{ $loop->index+1 }}. {{ $pizza->name }}
                </a><h4>
            </div>
        @endforeach
    <div class="mssg">{{ session('mssg') }}</div>
</div>

@endsection