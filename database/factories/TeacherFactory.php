<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'personnel_code'=>$this->faker->randomNumber(5 , true),
            'email'=>$this->faker->safeEmail(),
            'age'=>$this->faker->numberBetween(30,60),
            'city'=>$this->faker->cityname(),
            'phone'=>$this->faker->mobilenumber()
        ];
    }
}
