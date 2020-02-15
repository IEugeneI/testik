<?php

use Illuminate\Database\Seeder;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dish')->insert([
            'id_recipe' => '1',
            'id_ingredient' => '1',
            'col' => '500',
        ]);
        DB::table('dish')->insert([
            'id_recipe' => '1',
            'id_ingredient' => '4',
            'col' => '1000',
        ]);
        DB::table('dish')->insert([
            'id_recipe' => '1',
            'id_ingredient' => '7',
            'col' => '20',
        ]);
        DB::table('dish')->insert([
            'id_recipe' => '2',
            'id_ingredient' => '2',
            'col' => '500',
        ]);
        DB::table('dish')->insert([
            'id_recipe' => '2',
            'id_ingredient' => '3',
            'col' => '50',
        ]);
        DB::table('dish')->insert([
            'id_recipe' => '2',
            'id_ingredient' => '6',
            'col' => '10',
        ]);
        DB::table('dish')->insert([
            'id_recipe' => '2',
            'id_ingredient' => '5',
            'col' => '500',
        ]);

    }
}
