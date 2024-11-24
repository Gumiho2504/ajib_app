<?php

namespace Database\Factories;

use App\Models\Responsibility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResponsibilityFactory extends Factory
{
    protected $model = Responsibility::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text' => $this->faker->text(100),
           // 'job_id' => Job::inRandomOrder()->first()
        ];
    }
}
