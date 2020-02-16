<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientsController extends Controller
{
    //


    public function show()
    {
        $ingredients=Ingredient::all();
        return view('recipebook')->with(['ingredients'=>$ingredients]);
    }

    public function added(Request $request)
    {
        $ingredient=new Ingredient;
        $ingredient->name=$request->name;
        $ingredient->units=$request->units;
        $ingredient->save();
        return view('added')->with(['definition'=>'ingredients','status'=>'Ингредиент добавлен!']);
    }

    public function delete(Request $request)
    {
        $ingredient=Ingredient::find($request->id);
        $ingredient->delete();
        return 'ok';

    }

    public function update(Request $request)
    {
        $ingredient=Ingredient::find($request->id);
        $ingredient->name=$request->name;
        $ingredient->units=$request->units;
        $ingredient->save();
        return $this->getIngridientById($request->id);
    }

    public function getIngridientById($id)
    {
        $ingridient=Ingredient::find($id);
        return view('ingridient')->with(['ingridient'=>$ingridient]);
    }

    public function getAllIngredients()
    {
        $ingredients=Ingredient::all();
        return $ingredients;
    }
}
