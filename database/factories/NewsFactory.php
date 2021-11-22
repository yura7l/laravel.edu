<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(40),
            'preview_text' => $this->faker->paragraphs(1, true),
            'detail_text' => $this->faker->paragraphs(5, true)
        ];
    }
}
