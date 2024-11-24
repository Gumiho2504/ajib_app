<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $publishedAt = $this->faker->optional(0.9)->dateTimeBetween('-1 month', 'now'); // 90% chance of a published date
        $minSalary = $this->faker->numberBetween(100, 1000) * 10;
        $maxSalary = $this->faker->numberBetween($minSalary + 100, $minSalary + 500);

        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'min_salary' => $minSalary,
            'max_salary' => $maxSalary,
            'work_model' => $this->faker->randomElement(['Remote', 'Onsite', 'Hybrid']),
            'type' => $this->faker->randomElement(['Full-Time', 'Part-Time', 'Contract']),
            'level' => $this->faker->randomElement(['Junior', 'Mid', 'Senior']),
            'open_count' => $this->faker->numberBetween(0, 20),
            'apply_count' => $this->faker->numberBetween(0, 0),
            'expired_at' => $publishedAt ? $this->faker->dateTimeBetween($publishedAt, $publishedAt->modify('+30 days')) : null,
            'company_id' => Company::factory(), // Automatically create and link a Company
            'published_at' => $publishedAt,
        ];
    }
}
