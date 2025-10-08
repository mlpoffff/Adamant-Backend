<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Dms;

class DmsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dms::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'link' => fake()->word(),
            'title' => fake()->sentence(4),
        ];
    }
}
