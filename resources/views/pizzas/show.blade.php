@extends('layouts.app')

@section('content')
<div>
    <div >
     <h1>Order for {{ $pizza->name }} </h1>
     <p> type - {{ $pizza->type }} </p>
     <p> base - {{ $pizza->base }} </p>
     <p class="toppings">
         Extra toppings:
     </p>
     <ul>
        @foreach($pizza->toppings as $topping)
            <li> {{$topping}} </li>
        @endforeach
     </ul>
    <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
    </form>
    </div>
</div>
@endsection
 