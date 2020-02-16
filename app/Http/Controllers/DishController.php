<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Ingredient;

class DishController extends Controller
{
    //
    public function delete(Request $request)
    {
        $dish=Dish::find($request->id);
        $dish->delete();
        return 'all is good';
    }

    public function added(Request $request)
    {
        $dish=new Dish;
        $dish->id_recipe=$request->id_recipe;
        $dish->id_ingredient=$request->id_ingredient;
        $dish->col=$request->col;
        $dish->save();
        return 'all its ok';
    }
}
