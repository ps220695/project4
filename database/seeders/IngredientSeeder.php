<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create([
            'id'=> '1',
            'name' => 'pizzabodem',
            'price' => '2.50',
            'aantal' => '500'
        ]);
        Ingredient::create([
            'id'=> '2',
            'name' => 'salami',
            'price' => '0.15',
            'aantal' => '1'
        ]);
        Ingredient::create([
            'id'=> '3',
            'name' => 'jonge kaas',
            'price' => '0.99',
            'aantal' => '100'
        ]);
        Ingredient::create([

            'id'=> '4',

            'name' => 'tonijn',
            'price' => '0.33',
            'aantal' => '10'
        ]);
    }
}
