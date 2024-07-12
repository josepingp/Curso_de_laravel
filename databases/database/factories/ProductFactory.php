<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Esto nos produce cadenas y numeros aleatorios pero no es lo que buscamos
        // return [
        //     'name' => Str::random(25),
        //     'short_description' => Str::random(45),
        //     'description' => Str::random(150),
        //     'price' => random_int(1,125) 
        // ];
        
        //Para dotar de cierto sentido a los datos nos apoyamos en faker
        return [
            'name' => fake()->name,
            'short_description' => fake()->sentence(),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(1, 125)
        ];
    }
}
