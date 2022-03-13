<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'suppervisorname'=>$this->faker->sentence(2),
        'sitename'=>$this->faker->sentence(2),
        'suppervisoremail'=>$this->faker->email(),
        'location'=>$this->faker->sentence(10),
        'sitenumber'=>$this->faker->numerify('###-###-####'),
        ];
    }
}
