<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'othername' => $this->faker->lastName,
            'gender' => rand(1, 2) == 1 ? "m" : "f",
            // 'identity_number' => $this->faker->unique()->randomNumber(8),
            // 'index_number' => $this->faker->unique()->randomNumber(8),
            // 'email' => $this->faker->unique()->safeEmail,
            // 'program_id' => Program::all()->random()->id,
            'is_staff' => '1',
            'is_admin' => '0',
            // 'class_group_id' => '1',
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

   

}
