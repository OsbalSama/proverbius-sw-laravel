<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence($nbWords = 3, $variableNbWords = true);
        return [
            'title' => $title,
            'slug' => Str::slug($title,'-') ,
            'description' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'type' => $this->faker->randomElement(['Producto', 'Servicio']),
            'amount' => $this->faker->randomFloat($maxDec = 2, $min=1, $min=999),
            'stock' => $this->faker->numberBetween(1,10),
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
