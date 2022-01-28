<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'type' =>$this->faker->name(),
            'email'=>$this->faker->email(),
        ];
    }
}