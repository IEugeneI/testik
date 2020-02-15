<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(DishTableSeeder::class);
         $this->call(IngredientTableSeeder::class);
         $this->call(RecipeTableSeeder::class);
    }
}
