<?php

use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingredient')->insert([
            'name' => 'Картошка',
            'units' => 'Г',
        ]);

        DB::table('ingredient')->insert([
            'name' => 'Свинина',
            'units' => 'Г',
        ]);
        DB::table('ingredient')->insert([
            'name' => 'Лук',
            'units' => 'Г',
        ]);
        DB::table('ingredient')->insert([
            'name' => 'Вода',
            'units' => 'Мл',
        ]);
        DB::table('ingredient')->insert([
            'name' => 'Мука',
            'units' => 'Г',
        ]);
        DB::table('ingredient')->insert([
            'name' => 'Перец',
            'units' => 'Г',
        ]);
        DB::table('ingredient')->insert([
            'name' => 'Масло',
            'units' => 'Г',
        ]);

    }
}
