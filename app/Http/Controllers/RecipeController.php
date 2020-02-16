<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use DB;
class RecipeController extends Controller
{
    //


    public function show()
    {
        $recipes=Recipe::all();
        return view('recipebook')->with(['recipies'=>$recipes]);
    }

    public function added(Request $request)
    {
        $recipe=new Recipe;
        $recipe->name=$request->name;
        $recipe->description=$request->description;
        $recipe->save();
        return redirect("getRecipeById/$recipe->id");
    }

    public function getRecipeById($id)
    {

       $ingredients=DB::table('dish')->where('id_recipe','=',$id)->leftJoin('ingredient','ingredient.id','=','dish.id_ingredient')->select('ingredient.name','ingredient.units','dish.col','dish.id_dish')->get();
       $recipe=Recipe::where('id',$id)->first();
       return view('recipe')->with(['recipe'=>$recipe,'ingredients'=>$ingredients]);

    }

    public function delete(Request $request)
    {
        $rec=Recipe::find($request->id);
        $rec->delete();
        return 'ok';
    }

    public function update(Request $request)
    {
        $recipe=Recipe::find($request->id);
        $recipe->name=$request->name;
        $recipe->description=$request->description;
        $recipe->save();
        return $this->getRecipeById($request->id);
    }
}
