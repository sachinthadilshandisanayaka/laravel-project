<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {

        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('name')->get();
    
        return view('pizzas', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
