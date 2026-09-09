<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ordinateur',
            'price' => 899.99,
            'stock' => 12
        ]);
        Product::create([
            'name' => 'Écran',
                'price' => 249.99,
                'stock' => 7
        ]);
        Product::create([
            'name' => 'Clavier',
            'price' => 79.99,
            'stock' => 25
        ]);
        Product::create([
            'name' => 'Souris',
            'price' => 39.99,
            'stock' => 42
        ]);
        Product::create([
            'name' => 'Webcam',
            'price' => 99.99,
            'stock' => 4
        ]);
    }
}
