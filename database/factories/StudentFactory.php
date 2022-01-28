<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory
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
            'middle_name' =>$this->faker->name(),
            'studentsstudents'=>$this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}