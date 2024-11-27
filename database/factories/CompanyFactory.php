<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->catchPhrase,
            'type' => $this->faker->randomElement(["Technology",
                "Healthcare",
                "Finance",
                "Retail",
                "Education",
                "Manufacturing",
                "Real Estate",
                "Hospitality",
                "Transportation",
                "Entertainment"]),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'district_id' => District::inRandomOrder()->first()
        ];
    }
}
