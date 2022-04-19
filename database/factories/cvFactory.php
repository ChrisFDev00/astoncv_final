<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cv>
 */
class cvFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'keyprogramming' => $this->faker->text,
            'education' => $this->faker->text,
            'urllinks' => $this->faker->text,
            'user_id' => User::factory()
        ];
        
    }
}
