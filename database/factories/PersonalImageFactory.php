<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Medium;
use App\Models\Personal;
use App\Models\PersonalImage;

class PersonalImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalImage::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'personal_id' => Personal::factory(),
            'image_id' => Medium::factory(),
        ];
    }
}
