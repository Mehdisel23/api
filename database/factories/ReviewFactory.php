<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => function () {
                return Produit::inRandomOrder()->first()->id;
            },
            'customer'=>$this -> faker -> name,
            'review'=> $this -> faker -> paragraph,
            'star'=> $this -> faker -> numberBetween(0 , 5)

        ];
    }
}
