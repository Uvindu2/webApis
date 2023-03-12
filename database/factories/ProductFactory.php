<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "productName" => $faker -> word,
            "productCategory" => $faker-> word,
            "quantity"=>$faker->numberBetween,
            "unitPrice"=>$faker->randomDigit, 
            "description"=>$faker->parageaph,          
            "model"=>$faker->word,          
            "imageUrl"=>$faker->parageaph,     
            "colour"=>$faker->word,          
            "cartStatus"=>$faker->boolval,          


        ];
    }
}
