<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('recipebook');
});

Route::post('/added/{id}', function ($id) {
    return view('added')->with(['definition'=>$id]);
})->middleware('auth');

Route::get('recipies', 'RecipeController@show');
Route::get('ingredients','IngredientsController@show');
Route::post('ingredient/added', 'IngredientsController@added');
Route::post('ingredient/delete', 'IngredientsController@delete')->middleware('auth');
Route::post('recipe/delete', 'RecipeController@delete')->middleware('auth');
Route::post('recipe/added', 'RecipeController@added')->middleware('auth');
Route::get('getIngridientById/{id}', 'IngredientsController@getIngridientById')->middleware('auth');
Route::post('updateIngridient', 'IngredientsController@update')->middleware('auth');
Route::post('updateRecipe', 'RecipeController@update')->middleware('auth');
Route::get('getRecipeById/{id}', 'RecipeController@getRecipeById')->middleware('auth');
Route::post('dish/added', 'DishController@added')->middleware('auth');
Route::post('dish/delete', 'DishController@delete')->middleware('auth');
Route::get('getAllIngredients', 'IngredientsController@getAllIngredients')->middleware('auth');



Auth::routes();

Route::get('/home', function () {
    return view('recipebook');
});
