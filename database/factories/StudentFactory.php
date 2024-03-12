<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
            'username' => fake()->unique()->username(),
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'othername' => fake()->lastName(),
            'gender' => rand(1, 2) == 1 ? "m":"f",
            'identity_number' => fake()->unique()->randomNumber(8),
            'index_nuber' => fake()->unique()->randomNumber(8),
            'email' => fake()->unique()->safeEmail(),
            'program_id' => Program::all()->random()->id,
            'is_staff' => '0',
            'is_admin' => '0',
            'class_group_id' => '1',
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

   
}
