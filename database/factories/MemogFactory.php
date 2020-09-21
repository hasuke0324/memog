<?php

namespace Database\Factories;

use App\Models\Memog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MemogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Memog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->realText,
        ];
    }
}
