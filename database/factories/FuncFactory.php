<?php

namespace Database\Factories;

use App\Models\Func;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Func>
 */
class FuncFactory extends Factory
{
    protected $model = Func::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Marketing',
                'Design',
                'Developer',
                'Sale',
                'Business',
                'Finance',
                'Technology',
                'Engineering',
                'Human Resources',
            ]),
            // Optionally include other fields like 'job_id' if needed
        ];
    }
}
