<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requestment>
 */
class RequestmentFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->text(100),
        ];
    }
}
