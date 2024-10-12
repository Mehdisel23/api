<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this -> faker ->word,
            'detail'=>$this -> faker-> paragraph,
            'price'=>$this -> faker -> numberBetween(100 , 1000),
            'stock'=> $this -> faker -> randomDigitNotNull() ,
            'discount'=> $this -> faker -> numberBetween(2 , 30),


        ];
    }
}
