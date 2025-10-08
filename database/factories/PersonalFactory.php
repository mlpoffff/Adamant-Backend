<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Medium;
use App\Models\Personal;

class PersonalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personal::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'fio' => fake()->word(),
            'description' => fake()->text(),
            'image_id' => Medium::factory(),
        ];
    }
}
