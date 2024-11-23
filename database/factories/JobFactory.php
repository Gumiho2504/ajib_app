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
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'min_salary' => $this->faker->numberBetween(30000, 50000),
            'max_salary' => $this->faker->numberBetween(60000, 100000),
            'work_model' => $this->faker->randomElement(['remote', 'onsite', 'hybrid']),
            'type' => $this->faker->randomElement(['full-time', 'part-time', 'contract']),
            'level' => $this->faker->randomElement(['junior', 'mid', 'senior']),
            'requestment_id' => null, // Replace with actual logic if required
            'skill_id' => null,      // Replace with actual logic if required
            'company_id' => Company::factory(), // Create a company and associate
        ];
    }
}
