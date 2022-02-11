<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class pizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizza::create([
            'id'=> '1',
            'name' => 'pepperone',

        ]);
        Pizza::create([
            'id'=> '2',
            'name' => 'magherita',

        ]);
        Pizza::create([
            'id'=> '3',
            'name' => 'salami',

        ]);
        Pizza::create([
            'id'=> '4',
            'name' => 'tonno',

        ]);
        Pizza::create([
            'id'=> '5',
            'name' => 'kebap',

        ]);
        Pizza::create([
            'id'=> '6',
            'name' => 'vegetarisch',

        ]);
        Pizza::create([
            'id'=> '7',
            'name' => 'diavolo',

        ]);
    }
}

