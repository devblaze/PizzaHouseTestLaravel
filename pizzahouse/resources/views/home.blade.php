@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <br>
                    <p><a href="{{ route('pizzas.store') }}">View all Pizza Orders</a></p>
                    <p><a href="{{ route('kebab.orders') }}">View all Kebab Order</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
