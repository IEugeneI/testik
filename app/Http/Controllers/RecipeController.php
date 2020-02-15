<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
class RecipeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $recipes=Recipe::all();
        return view('recipebook')->with(['recipies'=>$recipes]);
    }
}
