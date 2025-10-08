<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Application;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => fake()->word(),
            'name' => fake()->name(),
            'surname' => fake()->word(),
            'phone_number' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'description' => fake()->text(),
        ];
    }
}
