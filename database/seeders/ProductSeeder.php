<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Playera',
            'price' => '300'
        ]);
        Product::create([
            'name' => 'Tennis',
            'price' => '500'
        ]);
        Product::create([
            'name' => 'Celular',
            'price' => '900'
        ]);
    }
}
