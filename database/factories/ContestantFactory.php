<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contestant>
 */
class ContestantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->company(),
            'election_id' => random_int(0,1) ,
            'about' => $this->faker->paragraph,
            'position'=> $this->faker->jobTitle,
            'image' => $this->faker->imageUrl(200, 200),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'party' => $this->faker->randomElement(['Democratic', 'Republican', 'Independent']),
            'party_logo' => $this->faker->imageUrl(200,200)

        ];
    }
}
