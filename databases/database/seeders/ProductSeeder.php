<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        // Asi creariamos datos a mano
        // Product::create([
        //     'name' => 'Example',
        //     'short_description' => 'Lorem Ipsum',
        //     'description' => 'Lorem Ipsum Set Aimet.',
        //     'price' => 24
        // ]);
        // Product::create([
        //     'name' => 'Example2',
        //     'short_description' => 'Lorem Ipsum',
        //     'description' => 'Lorem Ipsum Set Aimet.',
        //     'price' => 34
        // ]);
        // Product::create([
        //     'name' => 'Example3',
        //     'short_description' => 'Lorem Ipsum',
        //     'description' => 'Lorem Ipsum Set Aimet.',
        //     'price' => 114
        // ]);

        //asi creariamos datos con el factory
        Product::factory()->count(150)->create();
    }
}
