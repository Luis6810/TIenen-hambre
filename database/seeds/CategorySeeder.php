<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' => 'Postres'
        ]);

        App\Category::create([
            'name' => 'Bebidas'
        ]);

        App\Category::create([
            'name' => 'Especiales'
        ]);
    }
}
