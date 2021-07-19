@extends('layouts.layout')

@section('content')
<div class="relative min-h-screen">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1>Pizzas</h1>
        @foreach($pizzas as $pizza)
        <div>
            {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
        </div>   
        @endforeach
    </div>
</div>
@endsection
 