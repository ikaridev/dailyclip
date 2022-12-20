<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fake = $this->faker;
        return [
            'title' => $fake->name(),
            'path' => 'video.mp4',
            'is_public' => $fake->randomElement([0,1]),
            'release' => $fake->date()
        ];
    }
}
