@extends('layouts.layout')

@section('content')
<div class="relative min-h-screen">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
     <h1>Order for {{ $pizza->name }} </h1>
     <p> type - {{ $pizza->type }} </p>
     <p> base - {{ $pizza->base }} </p>
    </div>
</div>
@endsection
 