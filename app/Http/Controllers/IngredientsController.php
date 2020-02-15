<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $ingredients=Ingredient::all();
        return view('recipebook')->with(['ingredients'=>$ingredients]);
    }
}
