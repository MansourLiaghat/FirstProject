<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name'=>$this->faker->name(),
            'national_code'=>$this->faker->numberBetween(1000000000,9999999999),
            'email'=>$this->faker->safeemail(),
            'age'=>$this->faker->numberbetween(15,20),
            'phone'=>$this->faker->mobilenumber(),
            'city'=>$this->faker->cityname(),
            'school_id'=>$this->faker->numberbetween(1,10)
            
        ];
    }
}
