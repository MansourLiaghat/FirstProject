<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\School>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name_school'=>$this->faker->name(),
            'name_headmaster'=>$this->faker->name(),
            'phone'=>$this->faker->mobileNumber(),
            'email'=>$this->faker->safeemail(),
            'city'=>$this->faker->cityname()
        ];
    }
}
