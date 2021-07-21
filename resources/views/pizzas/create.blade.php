@extends('layouts.layout')

@section('content')
<div >
    <div >
        <h1>Add a New Pizzas</h1>
        <div class="wrapper create pizza">
            <form action="/pizzas" method="POST">
                @csrf
                <label for="name">Your name</label>
                <input type="text" name="name" id="name">
                <label for="type">Choose pizza type</label>
                <select name="type" id="type">
                    <option value="margarita">Margarita</option>
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg suprime</option>
                    <option value="volcano">Volcano</option>
                </select>
                <label for="base">Choose base type</label>
                <select name="base" id="base">
                    <option value="chessy crust">Chessy crust</option>
                    <option value="garlic crust">Garlic crust</option>
                    <option value="thin & crispy">thin & crispy</option>
                    <option value="thick">Thick</option>
                </select>
                <fieldset>
                    <label for="">Extra Toppings</label> <br>
                    <input type="checkbox" name="toppings[]" id="" value="mushroom">Mushroom <br>
                    <input type="checkbox" name="toppings[]" id="" value="peppers">Peppers <br>
                    <input type="checkbox" name="toppings[]" id="" value="garlic">Garlic <br>
                    <input type="checkbox" name="toppings[]" id="" value="olives">Olives <br>
                </fieldset>
                <input type="submit" value="Order pizza">
            </form>
        </div>
    </div>
</div>
@endsection
 