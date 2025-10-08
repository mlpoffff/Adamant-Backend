<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Announce;

class AnnounceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announce::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'active' => fake()->boolean(),
            'description' => fake()->text(),
        ];
    }
}
